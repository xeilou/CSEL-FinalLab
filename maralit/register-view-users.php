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
	<title>Registered Users Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php include('header.php');?>
	<?php include('info-col.php');?>
	<?php include('nav.php');?>
		<div id="reg-table">
			<h2>Registered Users</h2>
			<?php
				require('mysqli_connect.php');
				//fetch data through query
				$q = "SELECT user_id, fname, lname, email,
				DATE_FORMAT(registration_date, '%M %d, %Y') as regdate 
				from users ORDER BY registration_date ASC";
				$result = @mysqli_query($dbcon, $q);
				if($result){ //fetching success
					echo '<table>
						<tr>
						<th id="myname">Name:</th>
						<th id="myemail">Email:</th>
						<th id="myregdate">Registration Date:</th>
						<th id="actions" colspan="2">Actions:</th>
						</tr>';
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
						echo '<tr>
						<td>'.$row['lname'].', '.$row['fname'] . '</td>
						<td>'.$row['email'] . '</td>
						<td>'.$row['regdate'] . '</td>
						<th><a href="edit_user.php?id='.$row['user_id'].'">Edit</a></th>
						<th  id="delete-btn"><a href="delete_user.php?id='.$row['user_id'].'">Delete</a></th>
						</tr>';
					}
					echo '</table>';
					mysqli_free_result($result);
				}else{ //unsuccessful >:^(
					echo '<p class="error">The current users could not be retrieved due to a system error. Please report this incident to the SysAdmin. Error Code: 17</p>';
				}
				mysqli_close($dbcon);
			?>
		</div>
	<?php include('footer.php'); ?>
	
</body>
</html>