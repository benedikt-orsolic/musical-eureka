<?php
session_start();
if(isset($_POST['logout'])) { 
	session_unset();
    /*session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);*/
	
}
if(!isset($_SESSION['uuid'])){
	header('Location: index.php');
}

?>










<?php include 'inc/header.php'; ?>
<h1>This is your account page</h1>
<form method="POST" target="my_account.php">
	<button id="submit" name="logout">Logout</button>
</form>











</body>
</html>
