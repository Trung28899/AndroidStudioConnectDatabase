<?php 
	$db_name = "employee101"; 
	$mysql_username = "root"; 
	$mysql_password = "trungtrinh38"; 
	$server_name = "localhost"; 
	
	$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
	
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to mySQL '. mysqli_connect_errno(); 
	} else {
		echo 'Connected Sucessfully !'; 
	}
?>