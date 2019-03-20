<?php
include "inc/dbconn.php";
include "inc/login_helpers.php";
session_start();







/* When user clicks on login. *************************************************/
if(isset($_POST['login']) and !isset($_SESSION['uuid'])){
	login();
}/*****************************************************************************/







/* When user clicks on register. **********************************************/
if(isset($_POST['register']) and !isset($_SESSION['uuid'])){
	register($_POST['username'], $_POST['pwd']);
}/*****************************************************************************/







/* Redirect if loged in. ******************************************************/
if(isset($_SESSION['uuid'])) { 
	header('Location: index.php'); 
}/*****************************************************************************/

?>











<?php include 'inc/header.php'; ?>
<form id="login_form" method="POST"><fieldset>
	<legend>Login</legend>
	
	Username:<input class="login_credentials" type="text" name="username">
	<input id="submit" type="submit" value="Login" name="login"><br>
	
	Password: <input class="login_credentials" type="password" name="pwd"><br>
	
</fieldset></form>


<form id="login_form" method="POST"><fieldset>
	<legend>Or register a new account</legend>
	
	Username:<input class="login_credentials" type="text" name="username">
	<input id="submit" type="submit" value="Register" name="register"><br>
	
	Password:<input class="login_credentials" type="password" name="pwd1"><br>
	Repeat password:<input class="login_credentials" type="password" name="pwd2"><br>
	e-mail:<input class="login_credentials" type="email" name="email"><br>
</fieldset></form>

</body> 
</html> 
