<?php


function open(){
	//Connect to database
	require('sql_details.php');
	
	$servername = $sql_details["host"];
	$username = $sql_details['user'];
	$password = $sql_details['pass'];
	$db = $sql_details['db'];
	
 	//$servername = "localhost";
	//$username = "camba063_cloud";
	//$password = "cloudbase";
	//$db = "camba063_cloudbase";
	
        $conn = new mysqli($servername, $username, $password, $db);
	if($conn->connect_error){die("Connection failed: " . $conn->connect_error);} 
	return $conn;
}
function close($conn){
	$conn->close();
}
?>
