<?php 
	require "conn.php";
	
	$user_name = $_POST["user_name"]; 
	$user_pass = $_POST["password"]; 
	$mysql_qry = "select * from employee_data where username like '$user_name' and password like '$user_pass';";

	$result = mysqli_query($conn, $mysql_qry); 
	// if there is more than 0 row that match the result
	if(mysqli_num_rows($result) > 0){
		echo "Loggin Successfully !"; 
	} else {
		echo "Loggin Failed !!"; 
	}
?>