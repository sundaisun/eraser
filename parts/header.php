<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Full Screen header and nav</title>
		<meta name="description" content="Fullscreen Overlay Styles &amp; Effects" />
		<meta name="keywords" content="fullscreen overlay, overlay menu, inspiration, styles, effect, css" />
		<meta name="author" content="Sundai" />
		<link rel="stylesheet" type="text/css" href="stylesheets/base.css" />
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="bower_components/modernizr/modernizr.js"></script>
	</head>
	<body>
		<div class="container top-section">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<div><img src="/img/hero.png" alt="Xiangpihui"></div>	
				<nav>
					<a href="index3.html">Slide down</a>
					<a class="current-demo" href="index5.html">Scale</a>
					<a href="index6.html">Door</a>
				</nav>
			</header>
			<section>
				<p>Overlay scale up and fades in.</p>
				<p><button id="trigger-overlay" type="button">Open Overlay</button></p>
			</section>
		</div><!-- /container -->
		<!-- open/close -->
		<div class="overlay overlay-scale">
<!--			<button type="button" class="overlay-close">Close</button>-->
        <button type="button" class="overlay-close">Close</button>
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Work</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
	