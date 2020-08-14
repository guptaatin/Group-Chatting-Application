<?php

	include"dbh.php";
	
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	
	$sql = "insert into signup(username, email, password)values('$uname', '$email', '$password')";
	$result = mysqli_query($con, $sql);
	
	header("Location: index.php");

?>