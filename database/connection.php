<?php
	$servername = 'localhost';
	$username = 'root';
	$password = 'Gboy@455';

	//connecting to the database
	try {
		$conn = new PDO("mysql:host=$servername; dbname=inventory", $username, $password);
	//	$conn = new PDO("mysql:host=hostname;dbname=database_name", "username", "password");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (\Exception $e) {
		$error_message = $e->getMessage();
	}


?>