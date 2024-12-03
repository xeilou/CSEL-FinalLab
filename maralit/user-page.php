<?php
	session_start();
	if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1 && $_SESSION['user_level'] != 0)) {
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
	<?php include('header-member.php');?>
	<?php include('info-col.php');?>
	<?php include('nav-member.php');?>

	<div id="container">
        <div class="columns">
            <div class="column">				
				<h1>Today's Member Exclusive</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras luctus odio vel varius porttitor. Nullam aliquet, augue nec vestibulum congue, libero justo tempor ligula, id fermentum mi felis id ligula.</p>
                <p>Praesent id sem et lectus aliquet suscipit. Fusce gravida nisi sit amet tellus auctor, in elementum eros consequat. Proin dapibus nisi vitae sapien facilisis, nec congue purus fermentum.</p>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec consectetur massa. Integer sit amet augue ac velit auctor rutrum sed vel massa. Pellentesque lacinia hendrerit congue. Vivamus quam ante, fermentum id pretium ultricies, porttitor id sem. Ut sagittis vel ex vitae malesuada. Maecenas tristique, lorem eu pellentesque laoreet, magna purus faucibus leo, id volutpat quam purus et magna. Sed a rutrum mi.

				Suspendisse ut dolor eu est efficitur convallis. Pellentesque molestie tincidunt elit commodo feugiat. Sed porta bibendum fringilla. Integer eget dolor at nisl vestibulum dictum. Mauris mollis vel lorem at sollicitudin. Ut mattis aliquet nisi at posuere. Donec sodales nunc est, in sodales turpis laoreet sit amet. Vestibulum dictum sit amet felis ac efficitur. Morbi ut ultricies lacus, ut consequat lacus. Maecenas non tellus id neque ultrices pellentesque. Morbi porta urna a orci rutrum consectetur.

				In hac habitasse platea dictumst. Donec tincidunt lacus suscipit augue scelerisque egestas. In ultricies nibh quis odio lacinia condimentum. Ut maximus lacus eget lorem malesuada pretium a nec mi. Suspendisse id nunc venenatis, convallis purus in, tristique mi. Vestibulum sollicitudin ipsum eget nibh faucibus, ut pellentesque lacus vulputate. Duis non volutpat lectus, ut accumsan sem. Morbi porta molestie nisi non facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce vel erat nibh. Mauris lacinia suscipit enim. Phasellus feugiat lacinia tempor.

				Nulla gravida et dolor suscipit elementum. Proin ut leo dapibus, sollicitudin odio a, sollicitudin nibh. Cras accumsan massa luctus libero cursus hendrerit. Aliquam finibus eget sem sit amet egestas. Duis vitae nisl ligula. Donec vel tortor eu nisi bibendum varius et sit amet nisl. Vestibulum finibus mattis bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec egestas dolor. In at ipsum dui. Suspendisse nisl sapien, consectetur non leo sed, scelerisque pretium purus. Pellentesque efficitur malesuada sem, sed auctor turpis condimentum quis. Phasellus et lobortis massa. Etiam faucibus orci sollicitudin placerat suscipit. Proin ut lorem in tortor elementum accumsan commodo sit amet erat.

				Donec bibendum porttitor nisi, et molestie ex consequat nec. Cras feugiat vel justo venenatis tincidunt. Donec rutrum enim non diam ultricies, sed sagittis arcu vehicula. Curabitur vestibulum erat interdum mi placerat pharetra. Aliquam lacinia mollis sem non pulvinar. Integer justo justo, lacinia et interdum in, vehicula ac nunc. Integer pharetra nibh et risus commodo, sit amet efficitur dolor iaculis. In enim felis, scelerisque et pulvinar vitae, viverra eu est. Integer id quam commodo, maximus nunc nec, varius sem. Nullam vulputate lobortis tortor eget porttitor. Nulla aliquam, libero eget hendrerit tempor, magna tortor tincidunt leo, at faucibus magna neque fringilla nisi. Mauris dignissim mauris sit amet ex efficitur viverra. In et sagittis velit. Sed tincidunt consectetur justo vel tincidunt. Fusce id ex eget metus ultrices suscipit. Maecenas accumsan feugiat tincidunt.
				</P>
			</div>

            <div class="column">
                <p>Aliquam erat volutpat. Ut ac urna orci. Nulla facilisi. Maecenas ultricies, erat eget sodales efficitur, sem dui volutpat ligula, et scelerisque arcu purus vel urna. Quisque id nisi a eros elementum feugiat.</p>
                <h2>Featured Story</h2>							
				<img src="content-img1.webp">
				<p>Duis auctor libero ac urna volutpat, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec consectetur massa. Integer sit amet augue ac velit auctor rutrum sed vel massa. Pellentesque lacinia hendrerit congue. Vivamus quam ante, fermentum id pretium ultricies, porttitor id sem. Ut sagittis vel ex vitae malesuada. Maecenas tristique, lorem eu pellentesque laoreet, magna purus faucibus leo, id volutpat quam purus et magna. Sed a rutrum mi.

				Suspendisse ut dolor eu est efficitur convallis. Pellentesque molestie tincidunt elit commodo feugiat. Sed porta bibendum fringilla. Integer eget dolor at nisl vestibulum dictum. Mauris mollis vel lorem at sollicitudin. Ut mattis aliquet nisi at posuere. Donec sodales nunc est, in sodales turpis laoreet sit amet. Vestibulum dictum sit amet felis ac efficitur. Morbi ut ultricies lacus, ut consequat lacus. Maecenas non tellus id neque ultrices pellentesque. Morbi porta urna a orci rutrum consectetur.

				In hac habitasse platea dictumst. Donec tincidunt lacus suscipit augue scelerisque egestas. In ultricies nibh quis odio lacinia condimentum. Ut maximus lacus eget lorem malesuada pretium a nec mi. Suspendisse id nunc venenatis, convallis purus in, tristique mi. Vestibulum sollicitudin ipsum eget nibh faucibus, ut pellentesque lacus vulputate. Duis non volutpat lectus, ut accumsan sem. Morbi porta molestie nisi non facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce vel erat nibh. Mauris lacinia suscipit enim. Phasellus feugiat lacinia tempor.

				Nulla gravida et dolor suscipit elementum. Proin ut leo dapibus, sollicitudin odio a at laoreet erat sagittis. Nam bibendum felis vitae enim fermentum, nec hendrerit risus mollis. Ut nec convallis quam, id tincidunt ex. consectetur adipiscing elit. Donec nec consectetur massa. Integer sit amet augue ac velit auctor rutrum sed vel massa. Pellentesque lacinia hendrerit congue. Vivamus quam ante, fermentum id pretium ultricies, porttitor id sem. Ut sagittis vel ex vitae malesuada. Maecenas tristique, lorem eu pellentesque laoreet, magna purus faucibus leo, id volutpat quam purus et magna. Sed a rutrum mi.

				Suspendisse ut dolor sollicitudin odio a dolor suscipi</p>
            </div>

            <div class="column">
                <p>Suspendisse ac varius lacus. Phasellus bibendum nulla eget metus viverra, id mollis augue varius. Integer vel ligula risus. Nulla id tincidunt magna. Mauris luctus velit nec risus vehicula, nec fermentum neque tempus.</p>
				<p>Etiam vehicula risus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec consectetur massa. Integer sit amet augue ac velit auctor rutrum sed vel massa. Pellentesque lacinia hendrerit congue. Vivamus quam ante, fermentum id pretium ultricies, porttitor id sem. Ut sagittis vel ex vitae malesuada. Maecenas tristique, lorem eu pellentesque laoreet, magna purus faucibus leo, id volutpat quam purus et magna. Sed a rutrum mi.

				Suspendisse ut dolor eu est efficitur convallis. Pellentesque molestie tincidunt elit commodo feugiat. Sed porta bibendum fringilla. Integer eget dolor at nisl vestibulum dictum. Mauris mollis vel lorem at sollicitudin. Ut mattis aliquet nisi at posuere. Donec sodales nunc est, in sodales turpis laoreet sit amet. Vestibulum dictum sit amet felis ac efficitur. Morbi ut ultricies lacus, ut consequat lacus. Maecenas non tellus id neque ultrices pellentesque. Morbi porta urna a orci rutrum consectetur.

				In hac habitasse platea dictumst. Donec tincidunt lacus suscipit augue scelerisque egestas. In ultricies nibh quis odio lacinia condimentum. Ut maximus lacus eget lorem malesuada pretium a nec mi. Suspendisse id nunc venenatis, convallis purus in, tristique mi. Vestibulum sollicitudin ipsum eget nibh faucibus, ut pellentesque lacus vulputate. Duis non volutpat lectus, ut accumsan sem. Morbi porta molestie nisi non facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce vel erat nibh. Mauris lacinia suscipit enim. Phasellus feugiat lacinia tempor.
				
				Nulla gravida et dolor sLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec consectetur massa. Integer sit amet augue ac velit auctor rutrum sed vel massa. Pellentesque lacinia hendrerit congue. Vivamus quam ante, fermentum id pretium ultricies, porttitor id sem. Ut sagittis vel ex vitae malesuada. Maecenas tristique, lorem eu pellentesque laoreet, magna purus faucibus leo, id volutpat quam purus et magna. Sed a rutrum mi.
				
				<h1><a href="user-page.php">Napipindot na Hyperlink</a></h1>
				Suspendisse ut dolor eu est efficitur convallis. Pellentesque molestie tincidunt elit commodo feugiat. Sed porta bibendum fringilla. Integer eget dolor at nisl vestibulum dictum. Mauris mollis vel lorem at sollicitudin. Ut mattis aliquet nisi at posuere. Donec sodales nunc est, in sodales turpis laoreet sit amet. Vestibulum dictum sit amet felis ac efficitur. Morbi ut ultricies lacus, ut consequat lacus. Maecenas non tellus id neque ultrices pellentesque. Morbi porta urna a orci rutrum consectetur.

				In hac habitasse platea dictumst. Donec tincidunt lacus suscipit augue scelerisque egestas. In ultricies nibh quis odio lacinia condimentum. Ut maximus lacus eget lorem malesuada pretium a nec mi. Suspendisse id nunc venenatis, convallis purus in, tristique mi. Vestibulum sollicitudin ipsum eget nibh faucibus, ut pellentesque lacus vulputate. Duis non volutpat lectus, ut accumsan sem. Morbi porta molestie nisi non facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce vel erat nibh. Mauris lacinia suscipit enim. Phasellus feugiat lacinia tempor.

				Nulla gravida et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec consectetur massa. Integer sit amet augue ac velit auctor rutrum sed vel massa. Pellentesque lacinia hendrerit congue. Vivamus quam ante, fermentum id pretium ultricies, porttitor id sem. Ut sagittis vel ex vitae malesuada. Maecenas tristique, lorem eu pellentesque laoreet, magna purus faucibus leo, id volutpat quam purus et magna. Sed a rutrum mi.

				Suspendisse ut dolor sollicitudin odio a dolor suscipi.</p>
            </div>
        </div>
    </div>

	<?php include('footer.php'); ?>
</body>
</html>