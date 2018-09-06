<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel = "stylesheet" href = "./css/uikit.min.css">
    <link rel = "stylesheet" href = "../css/uikit.min.css">
    <link rel = "stylesheet" href = "./css/custom.css">
    <link rel = "stylesheet" href = "../css/custm.css">
	<script src="./js/uikit.min.js"></script>
    <script src="./js/uikit-icons.min.js"></script>
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>

</head>
<body>	
			<div uk-sticky = "sel-target: .uk-navbar-container; cls-active:uk-navbar-sticky">
				<nav class = "uk-navbar-container uk-margin" uk-navbar = "	mode:click; dropbar:true;">
						<div class = "uk-navbar-left">
						<a class = "uk-navbar-item uk-logo" href = "#">Logo</a>
							<ul class = "uk-navbar-nav">
								<li><a href = "index.php" uk-icon = "icon: home"> Home</a></li>
								<li><a href = "#" uk-icon = "icon: check"> Popular</a></li>
								<li><a href = "#" uk-icon = "icon: expand"> All</a></li>
								<li><a href = "#" uk-icon = "icon: file-edit"> Original Content</a></li>
							</ul>
						</div>
							<div class = "uk-navbar-right">
									<div>
										<ul class = "uk-navbar-nav"></ul>
											<li><a href = "create_post.php">Create a</a></li>
											<a class = "uk-navbar-toggle" uk-search-icon href = "#"></a>
												<div class = "uk-drop" uk-drop = "mode:click; pos:left-center; offset:0">
													<form class = "uk-search uk-search-default uk-width-medium-1-2">
														<input class = "uk-search-input" type = "search" placeholder = "Search..." autofocus>
													</form>
												</div>
										</ul>
									</div>				
		
								</form>
							</div>   <!--End of navbar right-->
				</nav>
			</div>
</body>
</html>