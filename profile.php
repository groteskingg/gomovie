<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Movie Review | Profile</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		

    <div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">GoMovie | Profile</h1>
							<small class="site-description">Track Movie at one Go</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="review.php">Movie List</a></li>
							<li class="menu-item"><a href="signin.php">Sign In</a></li>
							<li class="menu-item"><a href="about.php">About Us</a></li>
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.php">Home</a>
							<span>Profile</span>
						</div>

						<div class="content">
						<?php if(isset($_GET['status'])): ?>
						<p>
								<?php
									if($_GET['status'] == 'sukses'){
										echo "Login Successfull. Welcome!";
									}
								?>
							</p>
						<?php endif; ?>
							<div class="row">
								<div class="col-md-6">
									<figure class="Profile-Picture"><img src="dummy/person-2.jpg" alt="#"></figure>
								</div>
								<div class="col-md-6">
									<h2 class="Username">Cruella</h2>
									<div class="movie-summary">
										<p>Before she became known as a criminal with a savage affinity for dog-skin clothing, Cruella de Vil was known as Estella (Emma Stone), an orphaned girl living on the streets of London in the early 1970s, getting by on petty thefts and creative costumes. Her luck turns after she becomes an apprentice to London's most in-demand fashion designer, Baroness von Hellman (Emma Thompson). But just when it seems Estella's dreams are about to come true, she's confronted by her tragic past. </p>
									</div>
									<ul class="movie-meta">
										<li><strong>Rating:</strong> 
											<div class="star-rating" title="Rated 4.7 out of 5"><span style="width:94%"><strong class="rating">4.7</strong> out of 5</span></div>
										</li>
										<li><strong>Length:</strong> 134 min</li>
										<li><strong>Premiere:</strong> 28 May 2021 (USA)</li>
										<li><strong>Category:</strong> Comedy, Crime</li>
									</ul>

									<ul class="starring">
										<li><strong>Directors:</strong> Craig Gillespie</li>
										<li><strong>Writers:</strong> Dana Fox (screenplay), Tony McNamara (screenplay)</li>
										<li><strong>Stars:</strong> Emma Stone, Emma Thompson, Joel Fry </li>
									</ul>
								</div>
							</div> <!-- .row -->
						</div>
					</div>
				</div> <!-- .container -->
			</main>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia tempore vitae mollitia nesciunt saepe cupiditate</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Recent Review</h3>
								<ul class="no-bullet">
									<li>Lorem ipsum dolor</li>
									<li>Sit amet consecture</li>
									<li>Dolorem respequem</li>
									<li>Invenore veritae</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Help Center</h3>
								<ul class="no-bullet">
									<li>Lorem ipsum dolor</li>
									<li>Sit amet consecture</li>
									<li>Dolorem respequem</li>
									<li>Invenore veritae</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Sign In</h3>
								<ul class="no-bullet">
									<li>Lorem ipsum dolor</li>
									<li>Sit amet consecture</li>
									<li>Dolorem respequem</li>
									<li>Invenore veritae</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<ul class="no-bullet">
									<li>Facebook</li>
									<li>Twitter</li>
									<li>Google+</li>
									<li>Pinterest</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="text" placeholder="Email Address">
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<div class="colophon">Copyright 2014 Company name, Designed by Themezy. All rights reserved</div>
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>