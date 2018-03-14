<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sos";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    // Create database
		$sql = "CREATE DATABASE sos";
		$conn->query($sql);
	}else{
		// sql to create table
		$sql = "CREATE TABLE area (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		date_area VARCHAR(30),
		time_area VARCHAR(30),
		area_id VARCHAR(50),
		status VARCHAR(50),
		s_time TIMESTAMP
		)";
		$conn->query($sql);
	}
?>