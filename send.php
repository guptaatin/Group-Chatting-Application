<?php

	session_start();
	include"dbh.php";
	
	$name = $_SESSION['name'];
	$msg = $_POST['msg'];
	
	$sql = "insert into posts(msg, name)values('$msg', '$name')";
	$result = mysqli_query($con, $sql);
	
	header("Location: home.php");

?>