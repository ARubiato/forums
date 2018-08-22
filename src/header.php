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
							<ul class = "uk-navbar-nav">
								<li><a href = "#" uk-icon = "icon: triangle-down"> Home</a>
									<div class = "uk-navbar-dropdown">
										<ul class = "uk-nav uk-navbar-dropdown-nav">
											<li><a href = "#">Popular</a></li>
											<li><a href = "#">All</a></li>
											<li><a href="#">Original Content</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
							<div class = "uk-navbar-right">
							<form class = "uk-search uk-search-default uk-width-medium-1-2">
								<a href = "" uk-search-icon></a>
								<input class = "uk-search-input" type = "search" placeholder="Search...">
		
							</form>
							</div>   <!--End of navbar right-->
				</nav>
			</div>
</body>
</html>