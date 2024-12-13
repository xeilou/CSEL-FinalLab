<!doctype html>
<html lang="en">
<head>
	<title>Website ni Maralit</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php include('header.php');?>
	<?php include('info-col.php');?>
	<?php include('nav.php');?>
	
	<div id="container">
		<div class="columns">
			<div class="column">
				<p>
					<b>About Lorem Ipsum:</b> Nulla gravida et dolor suscipit elementum. Proin ut leo dapibus, sollicitudin odio a, sollicitudin nibh. Cras accumsan massa luctus libero cursus hendrerit. Aliquam finibus eget sem sit amet egestas. Duis vitae nisl ligula. Donec vel tortor eu nisi bibendum varius et sit amet nisl. Vestibulum finibus mattis bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec egestas dolor. In at ipsum dui. Suspendisse nisl sapien, consectetur non leo sed, scelerisque pretium purus. Pellentesque efficitur malesuada sem, sed auctor turpis condimentum quis. Phasellus et lobortis massa. Etiam faucibus orci sollicitudin placerat suscipit. Proin ut lorem in tortor elementum accumsan commodo sit amet erat.

					Donec bibendum porttitor nisi, et molestie ex consequat nec. Cras feugiat vel justo venenatis tincidunt. Donec rutrum enim non diam ultricies, sed sagittis arcu vehicula. Curabitur vestibulum erat interdum mi placerat pharetra. Aliquam lacinia mollis sem non pulvinar. Integer justo justo, lacinia et interdum in, vehicula ac nunc. Integer pharetra nibh et risus commodo, sit amet efficitur dolor iaculis. In enim felis, scelerisque et pulvinar vitae, viverra eu est. Integer id quam commodo, maximus nunc nec, varius sem. Nullam vulputate lobortis tortor eget porttitor. Nulla aliquam, libero eget hendrerit tempor, magna tortor tincidunt leo, at faucibus magna neque fringilla nisi. Mauris dignissim mauris sit amet ex efficitur viverra. In et sagittis velit. Sed tincidunt consectetur justo vel tincidunt. Fusce id ex eget metus ultrices suscipit. Maecenas accumsan feugiat tincidunt.
				</p>
			</div>

			<div class="column">
			<div id="reg-block2">
				<h2 class="register-title">Join Lorem Ipsum Today!</h2>
				<hr/>
				<?php
					if($_SERVER['REQUEST_METHOD'] == 'POST') {
						//error array to store all errors
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
						
						//do the two password fields contain equal values?
						if(!empty($_POST['psword1'])) {
							if($_POST['psword1'] != $_POST['psword2']) {
								$errors[] = 'Passwords do not match.';
							}else{
								$p = hash('crc32b', $_POST['psword1']);
							}
						}else {
							$errors[] = 'Input a password.';
						}
						
						//if all fields are satisfied
						if(empty($errors)) {
							require('mysqli_connect.php');
							//query for data input
							$q = "insert into users(fname, lname, email, psword,
							registration_date, user_level) values ('$fn', '$ln', '$e', '$p', NOW(), 0);";
							$result = @mysqli_query($dbcon, $q);
							if ($result) { //if result == True
								header("location: register-success.php");
								exit();
							}else { //if result == False
								//display error message
								echo '<h2>System Error</h2>
								<p class="error">Your registration failed due to an 
								unexpected error. Sorry for the inconvenience.
								</p>';
								//for debugging purposes
								echo '<p>'.mysqli_error($dbcon).'</p>';
							}
							//close database connection
							mysqli_close($dbcon);
							include('footer.php');
							exit();
						}else{
							echo '<h2>Error!</h2>';
							
							foreach($errors as $msg) {
								echo "<summary id='error-msg'>$msg<br/></summary>\n";
							}
						}
					}
				?>
				<form action="register.php" method="post">
					<p><label class="label" for="fname">First Name: </label>
					<input type="text" id="fname" name="fname" size="30" maxLength="40"
					value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>">
					</p>
					
					<p><label class="label" for="lname">Last Name: </label>
					<input type="text" id="lname" name="lname" size="30" maxLength="40"
					value="<?php if(isset($_POST['lname'])) echo $_POST['lname'];?>">
					</p>
					
					<p><label class="label" for="email">E-Mail: </label>
					<input type="text" id="email" name="email" size="30" maxLength="50"
					value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
					</p>
					
					<p><label class="label" for="psword1">Password: </label>
					<input type="password" id="psword1" name="psword1" size="30" maxLength="20"
					value="<?php if(isset($_POST['psword1'])) echo $_POST['psword1'];?>">
					</p>
					
					<p><label class="label" for="psword2">Repeat Password: </label>
					<input type="password" id="psword2" name="psword2" size="30" maxLength="20"
					value="<?php if(isset($_POST['psword2'])) echo $_POST['psword2'];?>">
					</p>
					
					<span><input type="submit" id="submit" name="submit" value="Register">
					</span>
				</form>
			</div>
			</div>

			<div class="column">
				<p>
					<b>Our Members Enjoy:</b> Nulla gravida et dolor suscipit elementum. Proin ut leo dapibus, sollicitudin odio a, sollicitudin nibh. Cras accumsan massa luctus libero cursus hendrerit. Aliquam finibus eget sem sit amet egestas. Duis vitae nisl ligula. Donec vel tortor eu nisi bibendum varius et sit amet nisl. Vestibulum finibus mattis bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec egestas dolor. In at ipsum dui. Suspendisse nisl sapien, consectetur non leo sed, scelerisque pretium purus. Pellentesque efficitur malesuada sem, sed auctor turpis condimentum quis. Phasellus et lobortis massa. Etiam faucibus orci sollicitudin placerat suscipit. Proin ut lorem in tortor elementum accumsan commodo sit amet erat.

					Donec bibendum porttitor nisi, et molestie ex consequat nec. Cras feugiat vel justo venenatis tincidunt. Donec rutrum enim non diam ultricies, sed sagittis arcu vehicula. Curabitur vestibulum erat interdum mi placerat pharetra. Aliquam lacinia mollis sem non pulvinar. Integer justo justo, lacinia et interdum in, vehicula ac nunc. Integer pharetra nibh et risus commodo, sit amet efficitur dolor iaculis. In enim felis, scelerisque et pulvinar vitae, viverra eu est. Integer id quam commodo, maximus nunc nec, varius sem. Nullam vulputate lobortis tortor eget porttitor. Nulla aliquam, libero eget hendrerit tempor, magna tortor tincidunt leo, at faucibus magna neque fringilla nisi. Mauris dignissim mauris sit amet ex efficitur viverra. In et sagittis velit. Sed tincidunt consectetur justo vel tincidunt. Fusce id ex eget metus ultrices suscipit. Maecenas accumsan feugiat tincidunt.
				</p>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>

</body>
</html>