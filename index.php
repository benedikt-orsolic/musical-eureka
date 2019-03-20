<?php
session_start();


include'inc/header.php'; 
?>

<br>
<br>
hello
<?php
if(isset($_SESSION['id'])){
	echo 'This is '.$_SESSION['username'].'\' home page.';
} 
?>

<br>
<br>


</body>
</html>
