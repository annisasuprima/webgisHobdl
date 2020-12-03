<?php
	$host = "us-cdbr-east-02.cleardb.com";
	$user = "b06095e839ba82";
	$pass = "173ebe6f";
	$dbname = "heroku_cd8ee38aa35bc9e";
	$conn = mysqli_connect($host, $user, $pass, $dbname);
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";
?>

