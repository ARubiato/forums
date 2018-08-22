<?php 
require 'src/header.php';
require 'php/server.php';
$vquery = "SELECT * FROM forum_post";
$results = mysqli_query($conn,$vquery);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>	
	<div class = "uk-container">
		<div class = "uk-card-center uk-card-body uk-width-3-4">
			<div class = "uk-card-primary">
	
			</div>
		</div>

		<div class = "uk-card uk-width-1-4 uk-float-right">
			<div class="uk-card uk-card-body uk-card-primary">
				<h5>Your personal Community Forums frontpage. Come here to check in with the community</h5>
				<a class = "uk-button uk-button-default" href = "create_post.php">Create a post</a>
			</div>
		</div>
	</div>
</body>
</html>