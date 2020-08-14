<html>

	<head>
	
		<title>Web Chat</title>
		
		<link rel="stylesheet" type="text/css" href="style.css">
	
	</head>
	
	<body>
	
		<div id="main">
		
			<div id="info">
			
				<h1>Login Here</h1>
				
				<form action="login.php" method="post">
				
					<label><b>Username</b></label>
					
					<input type="text" name="uname" placeholder="Enter the username" autocomplete="off" required><br><br>
					
					<label><b>Password</b></label>
					
					<input type="password" name="pass" placeholder="Enter the password" autocomplete="off" required><br><br>
					
					<button style="background-color: #6495ed; color: #fff;" type="submit" name="login"><b>Login</b></button>
				
				</form>
				
				<form action="signup.php" method="post">
				
					<h2>don't have an account signup here ?</h2>
					
					<label><b>Username</b></label>
					
					<input type="text" name="uname" placeholder="Enter the username" autocomplete="off" required><br><br>
					
					<label><b>Email</b></label>
					
					<input type="email" name="email" placeholder="Enter the email" autocomplete="off" required><br><br>
					
					<label><b>Password</b></label>
					
					<input type="password" name="pass" placeholder="Enter the password" autocomplete="off" required><br><br>
					
					<button style="background-color: #6495ed; color: #fff;" type="submit" name="signup"><b>SignUp</b></button>
				
				</form>
			
			</div>
		
		</div>
	
	</body>

</html>