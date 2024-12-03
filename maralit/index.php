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
					<form>
						<p><label>Email Address: </label>
							<input type="text" id="text-box" size="40" maxLength="40">
						</p>
						
						<p><label>Password: </label>
							<input type="text" id="text-box" size="40" maxLength="40">
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