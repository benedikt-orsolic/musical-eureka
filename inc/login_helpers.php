<?php
include "inc/dbconn.php";
session_start();











function login($username, $pwd){
	// Template
	$sql = "SELECT * FROM users WHERE username=? AND pwd=?";
	// Prepared statment
	$stmt = mysqli_stmt_init( $conn );
	
	if( !mysqli_stmt_prepare($stmt, $sql)){
		echo "Fail";
	} else {
		mysqli_stmt_bind_param($stmt, "ss", $username, $pwd);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		
		
		if( mysqli_num_rows($result) == 1 ){
			$user = mysqli_fetch_assoc($result);
			$_SESSION['uuid'] = $user['uuid'];
			$_SESSION['username'] = $user['username'];
		}
	}
}///////////////////////////////////////////////////////////////////////////////











/******************************************************************************/
/* Handels registratin. */
function register(){
	// TODO check if pwd1 is pwd2 and is email email
	
	$sql = "SELECT username FROM users WHERE username=?";
	$stmt = mysqli_stmt_init( $conn );
	
	if( mysqli_stmt_prepare($stmt, $sql)) {
		
		mysqli_stmt_bind_param($stmt, "s", $_POST['username']);
		mysqli_stmt_execute($stmt);
		
		$result = mysqli_stmt_get_result($stmt);
		if( mysqli_num_rows($result) == 0 ){
			addNewUser();
		}else {
			echo "Error__002__User exists";
		}
	} else { 
		echo "Error__001__";
	}
}///////////////////////////////////////////////////////////////////////////////











/******************************************************************************/
/* Adds new user to database. */
function addNewUser(){
	unset($stmt);
	$sql = "INSERT INTO users (username, email, pwd) VALUES (?, ?, ?)";
	$stmt = mysqli_stmt_init( $conn );
	
	if( mysqli_stmt_prepare($stmt, $sql) ){
		
		mysqli_stmt_bind_param($stmt, "sss", $_POST['username'], 
		                       $_POST['email'], $_POST['pwd1']);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_results($stmt);
		if( mysqli_num_rows($results) == 0 ){
			login($_POST['username'], $_POST['pwd1']);
		}
		// TODO also some error check
		//mysql_stmt_get_result($stmt);
	} else {
		echo "Error__000__";
	}
}///////////////////////////////////////////////////////////////////////////////
?>





















