<?php
	
	$name = $_POST['username'];
	$password = $_POST['password'];
	
	//echo 'User enterd:<br>'.'    Username: '.$name.'<br>    Password: '.$password;
?>



















<!DOCTYPE html>

<head>
	<title>Login page</title>
	<link rel="stylesheet" href="css/login.css">
</head>

<body>
	
	
	<nav>
		<a hreg="/home.php">Home</a>
		<a hreg="/home.php">Home</a>
		<a hreg="/home.php">Home</a>
	</nav>
	
	
	<form id="login_form" method="POST">
		<fieldset>
			<legend>Login information</legend>
			
			Username:<input class="login_credentials" type="text" name="username">
			<input id="submit_button" type="submit" value="Login"><br>
			
			Password: <input class="login_credentials" type="password" name="password"><br>
		</field>
	</form>
	
	
</body> 
</body> 
