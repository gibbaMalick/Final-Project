<?php
	//start the session

	session_start();
	if(isset($_SESSION['user'])) header('lacation: dashboard.php');


	$error_message = '';

	if($_POST){
		include('database/connection.php');

		$username = $_POST['username'];
		$password = $_POST['password'];


		// Use a prepared statement to fetch user data by email
        $query = 'SELECT * FROM users WHERE users.email=:username';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();


        if ($stmt->rowCount() > 0) {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt->fetch();

            // Verify the password
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                header('location: dashboard.php');
            } else {
                $error_message = 'Incorrect username or password. Please try again.';
            }
        } else {
            $error_message = 'User not found. Please try again later.';
        }
    }

		
	// 	$query = 'SELECT * FROM users WHERE users.email="'. $username .'" AND users.password="'. $password .'"';
	// 	$stmt = $conn->prepare($query);
	// 	$stmt->execute();

		
	// 	if($stmt->rowCount() > 0){
	// 		$stmt->setFetchMode(PDO::FETCH_ASSOC);
	// 		$user = $stmt->fetchAll()[0];
	// 		$_SESSION['user'] =$user;

	// 		header('location: dashboard.php');
	// 	}else
	// 	$error_message = 'Incorrrect username or password. Please try again later.';

	// }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IMS Login - Inventory Management System</title>

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body id="LoginBody">
	<?php if(!empty($error_message)) { ?>
        <div id="errorMessage">
            <p><b>ERROR:</b></p> <p><?= $error_message ?></p>
        </div>
    <?php } ?>
	<div class="container">
		<div class="LoginHeader">
			<h1>IMS</h1>
			<p>Inventory Management System</p>
		</div>
		<div class="LoginBody">
			<form action="login.php" method="POST">
				<div class="loginInputContainer">
					<label>Username</label>
					<input type="text" name="username" placeholder="username">
				</div>
				<div class="loginInputContainer">
					<label>Password</label>
					<input type="password" name="password" placeholder="password">
				</div>
				<div class="loginButtonContainer">
					<button>Login</button>
				</div>
			</form>
			
		</div>
	</div>
</body>
</html>