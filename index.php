<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IMS Homepage - Inventory Management System</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://use.fontawesome.com/91ed8d26bd.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="header">
		<div class="homaPageContainer">
			<a href="login.php">Login</a>
		</div>
	</div>
	<div class="banner">
		<div class="homePageContainer">
			<div class="bannerHeader">
				<h1>IMS</h1>
				<p>Inventory Management System</p>
			</div>
			<p class="bannerTagLine">
				Track  your products throughout your entire supply chain, from purchasing to production to end sales
			</p>
			<div class="bannerIcons">
				<a href=""><i class="fa fa-apple"></i></a>
				<a href=""><i class="fa fa-android"></i></a>
				<a href=""><i class="fa fa-windows"></i></a>
			</div>
		</div>
	</div>
	<div class="homePageContainer">
		<div class="homepageFeatures">
			<div class="homepageFeature">
				<span class="featureIcon"><i class="fa-solid fa-address-card"></i></span>
				<h3 class="featureTitle">About IMS</h3>
				<p class="featureDescription">We recognized that traditional inventory management methods were often time-consuming, error-prone, and hindered business growth. We saw an opportunity to change that.
				</p>
			</div>
			<div class="homepageFeature">
				<span class="featureIcon"><i class="fa fa-star"></i></span>
				<h3 class="featureTitle">Our Vision</h3>
				<p class="featureDescription">Our vision is to develop an intuitive and comprehensive IMS solution that empowers businesses of all sizes.</p>
			</div>
			<div class="homepageFeature">
				<span class="featureIcon"><i class="fa fa-globe"></i></span>
				<h3 class="featureTitle">Track Your products</h3>
				<p class="featureDescription">Efficient inventory management begins with the ability to track your products accurately and effortlessly. The IMS is designed to make tracking your products a seamless experience.</p>
			</div>
		</div>
	</div>
	<div class="homepageNotified">
		<div class="homePageContainer">
			<div class="homepageNotifiedContainer">
				<div class="emailForm">
					<h3>Get notified of any updates!</h3>
					<p class="featureDescription">
						Stay ahead of the curve with MyCompany's Inventory Management System (IMS). Our commitment to excellence extends beyond providing a powerful IMS solution—it includes keeping you informed about the latest updates and enhancements.
					</p>
	<form id="notifyForm">
        <div class="formContainer">
            <input type="text" id="email" placeholder="email address">
            <button type="submit">Notify</button>
        </div>
    </form>

    <!-- Bootstrap Modal for Notifications -->
    <div class="modal fade" id="notificationModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Notification message will be displayed here -->
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('notifyForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get the email input value
            var email = document.getElementById('email').value;

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Define the AJAX request
            xhr.open('POST', 'process-form.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Define the callback function when the request is complete
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Display the notification message in a Bootstrap modal
                    var notificationModal = new bootstrap.Modal(document.getElementById('notificationModal'));
                    var modalBody = document.querySelector('#notificationModal .modal-body');
                    modalBody.innerHTML = xhr.responseText;
                    notificationModal.show();
                }
            };

            // Send the request with the email data
            xhr.send('email=' + email);
        });
    </script>

					<!-- <form action="process-form.php" method="POST">
						<div class="formContainer">
							<input type="text" name="email" placeholder="email address">
							<button>Notify</button>
						</div>
					</form> -->
				</div>
				<div class="video"><iframe width="640" height="360" src="https://www.youtube.com/embed/rIJwIrGRYAk" title="What is Inventory Management? The Basics of Inventory Management" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>	
	<div class="socials">
		<div class="homePageContainer">
			<h3 class="socialHeader">Say Hi & Stay in Touch</h3>
			<p class="socialText">We are please to welcome you to our page! Come back next time.</p>
			<div class="socialIconsContainer">
				<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
				<a href="https://www.facebook.com/login"><i class="fa fa-facebook"></i></a>
				<a href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="homePageContainer">
			<a href="">Contact</a>
			<a href="mailto:gibbsgboy@gmail.com">Email</a>
			<a href="#" onclick="openSupportChat(); return false;">Support</a>
			<a href="">Privacy Policy</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>