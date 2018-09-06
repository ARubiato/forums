<?php
require 'include/header.php';
require 'php/server.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class = "uk-container">
		<div class = "uk-header">
			<h3>Create a post</h3>
			<hr>
		</div>
		<div class = "uk-grid">
			<div class = "uk-card-center uk-card-body uk-width-3-4">
				<ul class = "uk-tab" data-uk-tab = "{connect:'#my-id'}">
					<li><a href = "#">Post</a></li>
					<li><a href = "#">Upload Image</a></li>
					<li><a href = "#">Upload Video</a></li>
				</ul>
				
				<ul id = "my-id" class = "uk-switcher uk-margin">	
					<li>
						<form method="post" action = "create_post.php">
						<div class = "uk-margin">
							<input class = "uk-input" name="FP_TITLE" placeholder="Title of your post" required>
						</div>
						<div class = "uk-margin">
							<textarea class = "uk-textarea" name = "FP_DESC" rows = "10" placeholder="Description"></textarea>
						</div>
						<div class = "uk-margin uk-float-right">
							<button class ="uk-button uk-button-secondary">Save draft</button>
							<button class ="uk-button uk-button-default" name = "save">Post

					</form>	
							</button>
						</div>
					</li>
					<li>Content 2</li>
					<li>Content 3</li>
				</ul>
			</div>
			
			<div class = "uk-card-body uk-width-1-4 uk-float-right">
				<h5>Your latest posts</h5>
				<div class = "uk-card-default">
					<h4>My latest posts!</h4>
					<h4>How to be a "Gangsta"?!</h4>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
