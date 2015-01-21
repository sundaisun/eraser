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
		<div class="top-section">
			<!-- Top Navigation -->
			<header>
				<div id="hero-image"><img src="/img/hero.png" alt="Xiangpihui"></div>	
				<nav class="Source-Han-Light">
					<a href="#">关于本站</a>
					<a href="#">橡皮展示</a>
					<a href="#">联系我们</a>
				</nav>
			</header>
				<div id="trigger-overlay" class="menu-icon" type="button"><a id="toggle"><span></span></a></div>
				<div id="scroll-down"></div>
		</div><!-- top section -->
		<!-- open/close -->
		<div class="overlay overlay-hugeinc">
<!--			<button type="button" class="overlay-close">Close</button>-->
        <button type="button" class="overlay-close Source-Han-Light">关闭</button>
			<nav>
				<ul class="Source-Han-Light">
					<li><a href="#">回到首页</a></li>
					<li><a href="#">关于本站</a></li>
					<li><a href="#">橡皮展示</a></li>
					<li><a href="#">联系我们</a></li>
				</ul>
			</nav>
		</div>
	