<?php
	session_start();
	
	if(empty($_SESSION['type']))
		header("Location: ..");
	
	else if(strcmp($_SESSION['type'], "admin") == 0)
		header("Location: ../admin/home.php");
?>