<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
<meta carset='UTF-8'>
<link rel='stylesheet' href='css/login.css'>
<link rel='stylesheet' href='css/nav.css' >
</head>


<body>
<header>
	<ul>
		<li><a href='index.php'> Home </a></li>
		<?php 
		if(isset($_SESSION['uuid'])){
			echo '<li><a href=\'my_account.php\'>'.$_SESSION['username'].'<a></li>';
		}else{
			echo '<li><a href=\'login.php\'> Log in </a></li>';
		}?>
	</ul>
</header>
