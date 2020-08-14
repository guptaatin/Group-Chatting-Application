<?php

	session_start();
	include "dbh.php";
	
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	
	$sql = "select * from signup where username='$uname' AND password='$pass'";
	$result = mysqli_query($con, $sql);
	
	if(!$row=$result->fetch_assoc()){
		header("Location: error.php");
	}else{
		$_SESSION['name'] = $_POST['uname'];
		header("Location: home.php");
	}

?>