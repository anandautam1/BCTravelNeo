<?php

include 'databaseConfig.php'; 

if(!empty($_GET["email"]) && !empty($_GET["password"]))
	{
		$email = $_GET["email"];

		$password = $_GET["password"];

		$psalt = random_password(7);
		$password = sha1($password.$psalt);

	   // use with prepare statement after this
	    $query = "UPDATE users SET pass_hashed = '$password', pass_salt = '$psalt' WHERE email = '$email'";
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
