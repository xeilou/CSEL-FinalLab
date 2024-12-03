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
				<b>Welcome!</b>
				Nulla gravida et dolor suscipit elementum. Proin ut leo dapibus, sollicitudin odio a, sollicitudin nibh. Cras accumsan massa luctus libero cursus hendrerit. Aliquam finibus eget sem sit amet egestas. Duis vitae nisl ligula. Donec vel tortor eu nisi bibendum varius et sit amet nisl. Vestibulum finibus mattis bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec egestas dolor. In at ipsum dui. Suspendisse nisl sapien, consectetur non leo sed, scelerisque pretium purus. Pellentesque efficitur malesuada sem, sed auctor turpis condimentum quis. Phasellus et lobortis massa. Etiam faucibus orci sollicitudin placerat suscipit. Proin ut lorem in tortor elementum accumsan commodo sit amet erat.

				Donec bibendum porttitor nisi, et molestie ex consequat nec. Cras feugiat vel justo venenatis tincidunt. Donec rutrum enim non diam ultricies, sed sagittis arcu vehicula. Curabitur vestibulum erat interdum mi placerat pharetra. Aliquam lacinia mollis sem non pulvinar. Integer justo justo, lacinia et interdum in, vehicula ac nunc. Integer pharetra nibh et risus commodo, sit amet efficitur dolor iaculis. In enim felis, scelerisque et pulvinar vitae, viverra eu est. Integer id quam commodo, maximus nunc nec, varius sem. Nullam vulputate lobortis tortor eget porttitor. Nulla aliquam, libero eget hendrerit tempor, magna tortor tincidunt leo, at faucibus magna neque fringilla nisi. Mauris dignissim mauris sit amet ex efficitur viverra. In et sagittis velit. Sed tincidunt consectetur justo vel tincidunt. Fusce id ex eget metus ultrices suscipit. Maecenas accumsan feugiat tincidunt.
				</p>
			</div>
			<div class="column">
				<div id="reg-block">
					<h2>Login</h2>
					<hr>
                    <?php
                        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                            require('mysqli_connect.php');
                            //validate email
                            if(!empty($_POST['email'])) {
                                $e = mysqli_real_escape_string($dbcon, $_POST['email']);
                            }else {
                                echo '<p>Please enter a valid email address.</p>';
                            }
                            //validate password
                            if(!empty($_POST['psword'])) {
                                $p = mysqli_real_escape_string($dbcon, hash('crc32b', $_POST['psword']));
                            }else {
                                echo '<p>Invalid password.</p>';
                            }
                            if($e && $p) {
                                $q = "SELECT user_id, fname, user_level FROM users WHERE
                                (email = '$e' AND psword ='$p')";
                                $result = mysqli_query($dbcon, $q);
                                if(@mysqli_num_rows($result) == 1) {
                                    session_start();
                                    $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    $_SESSION['user_level'] = (int) $_SESSION['user_level'];
                                    $url = ($_SESSION['user_level'] === 1) ? 'admin-page.php' : 'user-page.php';
                                    header('Location: '.$url);
                                    exit();
                                    mysqli_free_result($result);
                                    mysqli_close($dbcon);
                                }else {
                                    echo '<p>You do not have any record in our system yet.</p>
                                    <p>Click <a href="register.php">HERE</a> to register.</p>';
                                }
                            }else {
                                echo '<p>Please try again.</p>';
                            }
                            mysqli_close($dbcon);
                        }
                    ?>
					<form action="login.php" method="post">
						<p><label for="email">Email Address:</label>
							<input id="email" type="text" name="email" size="30" maxLength="60"
                            value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
						</p>
						
						<p><label for="psword">Password:</label>
							<input id="psword" type="password" name="psword" size="20" maxLength="20"
                            value="<?php if (isset($_POST['psword'])) echo $_POST['psword']; ?>">
						</p>
						
						<span><input type="submit" id="submit" value="Login">
						</span>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>