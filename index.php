<?php 
require 'include/header.php';
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

	<div class = "uk-section uk-section-secondary uk-width-1-4 uk-margin-left uk-margin-right">
		<div class = "uk-container uk-container-expand">
			<div class = "uk-panel uk-panel-box">
				<h4>Create your own post!</h4>
				<p>Connect with the community by creating a thread!</p>
				<a href = "" class = "uk-button uk-button-default">Create post</a>
			</div>
		</div>
	</div>
	
	<div class = "uk-section uk-section-primary uk-margin-left uk-margin-right">
		<div class = "uk-container uk-container-expand">
		
		</div>
	</div>
		
</body>
</html>