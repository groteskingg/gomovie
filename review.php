<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Gomovie | List</title>

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
							<h1 class="site-title">GoMovie</h1>
							<small class="site-description">Track Movie at one Go</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item current-menu-item"><a href="review.php">Movie List</a></li>
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
							<span>Movie List</span>
						</div>

						<div class="filters">
							<select name="#" id="#" placeholder="Choose Category">
								<option value="#">-Genre-</option>
								<option value="#">Action</option>
								<option value="#">Drama</option>
								<option value="#">Fantasy</option>
								<option value="#">Horror</option>
								<option value="#">Adventure</option>
								<option value="#">Comedy</option>
								<option value="#">Thriller</option>
								<option value="#">Sci-Fi</option>
								<option value="#">Documentary</option>
								<option value="#">Animation</option>
							</select>
							<select name="#" id="#">
								<option value="#">-Years-</option>
								<option value="#">2021</option>
								<option value="#">2020</option>
								<option value="#">2019</option>
								<option value="#">2018</option>
								<option value="#">2017</option>
								<option value="#">2016</option>
							</select>
						</div>
						<div class="movie-list">
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/Cruella2.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">Cruella</a></div>
								<p>A live-action prequel feature film following a young Cruella de Vil.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/Conjuring2.png" alt="#"></figure>
								<div class="movie-title"><a href="single.php">The Conjuring: The Devil Made Me Do It</a></div>
								<p>The Warrens investigate a murder that may be linked to a demonic possession.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/ITH.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">In The Heights</a></div>
								<p>A film version of the Broadway musical in which Usnavi, a sympathetic New York bodega owner.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/Shiva Baby.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">Shiva Baby</a></div>
								<p>At a Jewish funeral service with her parents, a college student runs into her sugar daddy.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/Parasite.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">Parasite</a></div>
								<p>Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/Raya.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">Raya and The Last Dragon</a></div>
								<p>In a realm known as Kumandra, a re-imagined Earth inhabited by an ancient civilization, a warrior named Raya is determined to find the last dragon.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/Quiet Place 2.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">A Quiet Place Part II</a></div>
								<p>Following the events at home, the Abbott family now face the terrors of the outside world.</p>
							</div>
							<div class="movie">
								<figure class="movie-poster"><img src="dummy/Sound of Metal.jpg" alt="#"></figure>
								<div class="movie-title"><a href="single.php">Sound of Metal</a></div>
								<p>A heavy-metal drummer's life is thrown into freefall when he begins to lose his hearing.</p>
							</div>
						</div> <!-- .movie-list -->

						<div class="pagination">
							<a href="#" class="page-number prev"><i class="fa fa-angle-left"></i></a>
							<span class="page-number current">1</span>
							<a href="#" class="page-number">2</a>
							<a href="#" class="page-number">3</a>
							<a href="#" class="page-number">4</a>
							<a href="#" class="page-number">5</a>
							<a href="#" class="page-number next"><i class="fa fa-angle-right"></i></a>
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
								<h3 class="widget-title">Join Us</h3>
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