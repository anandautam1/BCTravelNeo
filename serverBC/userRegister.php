<?php

include 'databaseConfig.php'; 

if(!empty($_GET["email"]) && !empty($_GET["firstName"]) && !empty($_GET["lastName"]) && !empty($_GET["role"]) && !empty($_GET["phoneNumber"]) && !empty($_GET["password"]))
	{
		$email = $_GET["email"];

		$firstName = $_GET["firstName"];

		$lastName = $_GET["lastName"];

		$role = $_GET["role"];

		$phoneNumber = $_GET["phoneNumber"];

		$password = $_GET["password"];

		$psalt = random_password(7);
		$password = sha1($password.$psalt);

	   $query = "insert into users (userID, fname, lname, email, phone, pass_hashed, pass_salt, Role) values (NULL, '$firstName' , '$lastName', '$email', '$phoneNumber', '$password', '$psalt', '$role')";
	   //echo $query;

	   $inserted = mysqli_query($con, $query);

	   if($inserted == 1){
	    $json['success'] = 1;
	   }
	   else{
	    $json['success'] = 0;
	   }
	   echo json_encode($json);

	   mysqli_close($con);
	}

	function random_password( $length = 7 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
	}
?>
