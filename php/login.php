<?php

	$con = mysqli_connect('localhost', 'root', 'pass', 'db_name');
	if(!$db){
		echo "unable to connect to data base";	
	}
	
	$user_name = $_POST[''];
	$pass = $_POST[''];
	
	$query = mysqli_query($db, "SELECT * FROM `Alumni_LXA` WHERE `username`");
	
	if(!$query){
			
	}else{
		
	}
	


	mysqli_close($con);
?>
