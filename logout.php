<?php
	session_start();
	// pag walang naka-login, ibato sa index
	if(!isset($_SESSION['user_id'])) {
		header("Location:index.php");
		exit();	
	}
	// pag may naka-login, delete session, bato sa index
	else {
		$_SESSION = array();
		session_destroy();
		setcookie('PHPSESSID', '', time()-3600, '/', '', 0, 0);
		header("Location:index.php");
		exit();	
	}
?>