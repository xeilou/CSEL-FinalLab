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
	<title>Edit User Info</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php include('header.php');?>
	<?php include('info-col.php');?>
	<?php include('nav.php');?>
	
	<div id="reg-block">
		<h2>Editing Record...</h2>
		<hr>
		<?php
		//check for valid ID 
			if((isset($_GET['id'])) && (is_numeric($_GET['id']))){
				$id = $_GET['id'];	
			}elseif((isset($_POST['id'])) && (is_numeric($_POST['id']))){
				$id = $_POST['id'];	
			}else {
				echo '<h3 class="error">This page has been accessed by mistake.</h3>';
				echo '</div>';
				echo '</div>';
				include('footer.php');
				return;
			}
			require('mysqli_connect.php');
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$errors = array();
				//is the firt name field empty?
				if(empty($_POST['fname'])) {
					$errors[] = 'Input your first name.';
				}else {
					$fn = trim($_POST['fname']);
				}
				//is the last name field empty?
				if(empty($_POST['lname'])) {
					$errors[] = 'Input your last name.';
				}else {
					$ln = trim($_POST['lname']);
				}
				//is the email field empty?
				if(empty($_POST['email'])) {
					$errors[] = 'Input your email address.';
				}else {
					$e = trim($_POST['email']);
				}
				
				if(empty($errors)) {
					$q = "UPDATE users SET fname='$fn', lname='$ln', email='$e' WHERE
					user_id='$id' LIMIT 1"; //sanity check. amen
					$result = @mysqli_query($dbcon, $q);
					if(mysqli_affected_rows($dbcon) == 1){ //edit success
						echo '<h3>User Information Updated Successfully!</h3>';
					} else{ //edit unsuccessful
						echo '<h3>Update Unsuccessful.</h3>';
						// echo '<p>'.mysqli_error($dbcon).'</p>'; // optional -> for the sake of convenience only 
					}
				}else{
					echo '<h2>Error!</h2>';
					
					foreach($errors as $msg) {
						echo "<summary id='error-msg'>$msg<br/></summary>\n";
					}		
				}
			}
			$q = "SELECT fname, lname, email FROM users WHERE user_id=$id";
			$result = @mysqli_query($dbcon, $q);
			if(mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				// create form
				echo '
					<form action="edit_user.php" method="post">
						<p><label class="label" for="fname">First Name: </label>
						<input type="text" id="fname" name="fname" size="30" maxLength="40"
						value="'.$row['fname'].'">
						</p>
						
						<p><label class="label" for="lname">Last Name: </label>
						<input type="text" id="lname" name="lname" size="30" maxLength="40"
						value="'.$row['lname'].'">
						</p>
						
						<p><label class="label" for="email">E-Mail: </label>
						<input type="text" id="email" name="email" size="30" maxLength="50"
						value="'.$row['email'].'">
						</p>
						
						<span><input type="submit" id="submit" name="submit" value="Update">
						</span>
						<p><input type="hidden" name="id" value="'.$id.'">
						</p>
					</form>
				';
			}else {
			echo '<h3>You do Not Have a Record in Our Database Yet!</h3>';
			echo '<input type="submit" id="reg-now" value="Register Now" onclick="window.location.href=\'register.php\';">';
			}
			mysqli_close($dbcon);
		?>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>