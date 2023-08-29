<?php
	require "db_connect.php";
	require "header.php";
	session_start();
	
	if(empty($_SESSION['type']));
	else if(strcmp($_SESSION['type'], "admin") == 0)
		header("Location: admin/home.php");
	else if(strcmp($_SESSION['type'], "user") == 0)
		header("Location: user/home.php");
?>

<html>
	<head>
		<title>Event Management system</title>
		<link rel="stylesheet" type="text/css" href="css/index_style.css" />
	</head>
	<body>
		<div id="allTheThings">
			<div id="user">
				<a href="../user/index.php">
					<img src="img/ic_user.svg" width="250px" height="auto"/><br />
					&nbsp;User
				</a>
			</div>
			<div id="verticalLine">
				
				<div id="admin">
					<a id="admin-link" href="../admin/index.php">
						<img src="img/ic_admin.svg" width="250px" height="auto" /><br />
						&nbsp;&nbsp;&nbsp;Admin
					</a>
				</div>
			</div>
			<!-- <div id="verticalLine"> -->
				<div id="admin">
					<a id="admin-link" href="vendor">
						<img src="img/ic_user.svg" width="250px" height="auto" /><br />
						&nbsp;&nbsp;&nbsp;Vendor
					</a>
				</div>
			</div>
		</div>
	</body>
</html>