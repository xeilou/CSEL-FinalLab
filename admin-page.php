<?php
	session_start();
	if (!isset($_SESSION['user_level']) or $_SESSION['user_level'] != 1) {
		header("Location: login.php");
		exit();
	}
?>

<!doctype html>
<html lang="en">
<head>
	<title>Website ni Maralit</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php include('header-admin.php');?>
	<?php include('info-col.php');?>
	<?php include('nav-admin.php');?>
	<div id="dashboard">
		<img src="new-dboard.jpg">
	</div>
	<?php include('footer.php'); ?>
</body>
</html>