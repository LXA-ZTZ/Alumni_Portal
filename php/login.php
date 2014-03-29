<?php
	//connect to datatbase 
	$con = mysqli_connect('localhost', 'root', 'pass', 'db_name');
	//check database connection
	if(!$db){
		//if connection cannot be established print out "unable to connect"
		echo "unable to connect to data base";	
	}
	
	//make two variables username and password
	$user_name = $_POST[''];
	$pass = $_POST[''];
	
	//set query to find username
	$query = mysqli_query($db, "SELECT * FROM `Alumni_LXA` WHERE `username`");
	
	if(!$query){
		//echos "invalid username or password		
	}else{
		// if username is found checks password
		//sends users to the alumni portal Home page
	}
	

	//close the database connection
	mysqli_close($con);
?>
