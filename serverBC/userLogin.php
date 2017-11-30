<?php
// get password salt only
 $password = "Bj37au9595";
 $hash = "1234567";
 $pfinal = sha1("Bj37au95951234567");
 //$password . $hash);
 //echo $pfinal;
include 'databaseConfig.php'; 

// Login method
if(!empty($_GET["email"]) && empty($_GET["password"]))
	{

		$email = $_GET["email"];
		//echo $email;
		// check if username exist first
    	$query = "SELECT `pass_salt` FROM `users`  WHERE email='$email'";

    	$result = $con->query($query);
		if(!$result){
		    // generate error message
		    $message  = 'Invalid query: ' . mysql_error() . "\n";
		    // concatinate on the existing error
		    $message .= 'Whole query: ' . $query;
		    die($message);
    	}
    	// initialzie arra y
    	$data = array();
    	while($row = $result->fetch_assoc()){
      		$data[] = $row;
    	}
    	//var_dump($data);

    	$pSalt = $data[0];
    	$pSalt_string = $pSalt['pass_salt'];
    	if($pSalt_string === NULL)
    	{
    		$json_psalt['success'] = 0;
    		$json_psalt['pSalt'] = "NULL";
			echo json_encode($json_psalt);
    	}
    	else
    	{
			$json_psalt['success'] = 1;
			$json_psalt['pSalt'] = $pSalt_string;
			echo json_encode($json_psalt);
		}
		mysqli_close($con);
	}
else if(!empty($_GET["email"]) && !empty($_GET["password"]))
	{
		$con = mysqli_connect("127.0.0.1","root","root","securify");

		if (mysqli_connect_errno($con)) {
	 		die("Failed to connect to MySQL: " . mysqli_connect_error());
		}

		$email = $_GET["email"];
		$password = $_GET["password"];
		// check if username exist first
    	$query = "SELECT `email` , `pass_hashed` FROM `users`  WHERE email=$email and pass_hashed='$password'";

    	$result = $con->query($query);
		if(!$result){
		    // generate error message
		    $message  = 'Invalid query: ' . mysql_error() . "\n";
		    // concatinate on the existing error
		    $message .= 'Whole query: ' . $query;
		    die($message);
    	}
    	// initialzie arra y
    	$data = array();
    	while($row = $result->fetch_assoc()){
      		$data[] = $row;
    	}
    	$sanitizedData = array_filter($data);
    	if($data === NULL || empty($sanitizedData))
    	{
    		$json_psalt['success'] = 0;
			echo json_encode($json_psalt);
    	}
    	else
    	{
			$json_psalt['success'] = 1;

			echo json_encode($json_psalt);
		}
		mysqli_close($con);
	}



?>
