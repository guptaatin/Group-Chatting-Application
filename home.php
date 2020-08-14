<?php

	session_start();

?>

<html>

	<head>
	
		<title>Home</title>
		
		<link rel="stylesheet" type="text/css" href="home.css">
	
	</head>
	
	<body>
	
		<div id="main">
		
			<h1 style="background-color: #6495ed; color: #fff;"><?php echo $_SESSION['name'] ?>-online</h1>
			
			<div class="output">
			
				<?php 
				
					include "dbh.php";

					$sql = "select * from posts";
					$result = mysqli_query($con, $sql);

					if($result->num_rows > 0){
						while($row=$result->fetch_assoc()){
							echo "". $row['name'] . " ". ":: ". $row['msg'] ." -- ". $row['date'] ."<br>";
							echo "<br>";
						}
					}else{
						echo"0 results";
					}
					$con->close();
				?>
			
			</div>
			
			<form method="post" action="send.php">
			
				<textarea name="msg" placeholder="Type to send message......" class="form-control"></textarea><br>
				
				<input type="submit" value="Send">
			
			</form>
			
			<form action="logout.php">
							
				<input style="background-color: #6495ed; color: #fff; width: 100%; font-size: 20px;" type="submit" value="Logout">
			
			</form>
		
		</div>
	
	</body>

</html>