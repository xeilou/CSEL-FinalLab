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
	<title>Deleting User</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php include('header.php');?>
	<?php include('info-col.php');?>
	<?php include('nav-admin.php');?>
	
	<div id="reg-good">
		<h2>Deleting Record...</h2>
			<?php
			//checking for valid ID 
				if((isset($_GET['id'])) && (is_numeric($_GET['id']))){
					$id = $_GET['id'];	
				}elseif((isset($_POST['id'])) && (is_numeric($_POST['id']))){
					$id = $_POST['id'];	
				}else {
					echo '<h3 class="error">This page has been accessed by mistake.</h3>';
					echo '</div>';
					echo '</div>';
					include('footer.php');
					exit();
				}
				require('mysqli_connect.php');
				if($_SERVER['REQUEST_METHOD'] == 'POST'){ //make deletion functional here
					if($_POST['sure'] == 'Yes'){
						$q = "DELETE FROM users WHERE user_id=$id";
						$result = @mysqli_query($dbcon, $q);
						if(mysqli_affected_rows($dbcon) == 1){
							echo '<h3>The record has been deleted.</h3>';
							echo '<span><a href="register-view-users.php"><input type="submit" id="submit" value="Go Back"></a></span>';
						} else {
							echo '<h3>Error deleting user.</h3>';
						}
					} else {
						echo '<h3>The record has NOT been deleted.</h3>';
						echo '<span><a href="register-view-users.php"><input type="submit" id="submit" value="Go Back"></a></span>';
					}
				} else {
					//display user information of deleted user
					$q = "SELECT CONCAT(fname, ' ', lname) FROM users WHERE user_id=$id";
					$result = @mysqli_query($dbcon, $q);
					if (mysqli_affected_rows($dbcon) == 1) { //user id match found
						$row = mysqli_fetch_array($result, MYSQLI_NUM);
						echo "<h3>Are you sure you want to permanently delete $row[0]?</h3>";
						echo '
						<form action="delete_user.php" method="post">
						<input id="submit-yes" type="submit" name="sure" value="Yes">
						<input id="submit-no" type="submit" name="sure" value="No">
						<input type="hidden" name="id" value="'.$id.'">
						</form>
						';
					} else {
						echo 'ID not associated with any existing user.';
					}
				}
				mysqli_close($dbcon);
			?>
		</div>
	<?php include('footer.php'); ?>
	
</body>
</html>