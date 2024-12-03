<!doctype html>
<html lang="en">
<head>
	<title>Completed Registration</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php include('header.php');?>
	<?php include('info-col.php');?>
	<?php include('nav.php');?>

	<div id="reg-good">		
		<h2>Registration Complete!</h2>
		<p>You have complted your registration. Congratulations!</p>

		<span>
			<input type="submit" id="submit" value="Go Back" onclick="window.location.href='index.php';">
		</span>
	</div>
	<?php include('footer.php');?>
</body>
</html>