<?php

?>


<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' href='css/index.css' >
	</head>
	
	<body>
		
		
		<ul>
			<li onclick="linkTo('home.php')"><a> home </a></li>
			<li onclick="linkTo('login.php')"><a> login </a></li>
		</ul>
		
		
		<iframe id='iframe' src='home.php'></iframe>
	</body>
</html>


<script>
	resizeIframe();
	function linkTo( link ) {
		document.getElementsByTagName("iframe")[0].setAttribute("src", link); 
	}
	
	function resizeIframe() {
		var navSize = document.getElementByName("ul").style.height;
		var screeenSize = document.body.style.height;
		
		document.getElementByName("iframe").style.height = screenSize - navSize;
	}
</script>
