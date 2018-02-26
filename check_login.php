<?php
	session_start();
	$name = $_GET['name'];
	require 'db_conn.php';
	$member_select = "SELECT*FROM member WHERE f_name='$name'";
	$member_query = mysqli_query($conn,$member_select);
	$member_select = mysqli_fetch_array($member_query);
	if ($member_select) {
		$_SESSION['fname'] = $member_select['f_name'];
		header("location:./");
	}else{
		$_SESSION['fname'] = "";
		$sql = "CREATE TABLE member (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		f_name VARCHAR(30),
		f_email VARCHAR(30),
		f_tel VARCHAR(50),
		status VARCHAR(50),
		s_time TIMESTAMP
		)";
		$conn->query($sql);
		$member_insert = "INSERT INTO member (f_name) VALUES ('$name')";
		$conn->query($member_insert);
		header("location:./");
	}
?>