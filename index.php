<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Tobias M&uuml;ller</title> 
		<meta content="True" name="HandheldFriendly">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="viewport" content="width=device-width">


		<link rel="stylesheet" type="text/css" href="style.css" media="screen">

		<link rel="shortcut icon" href="pictures/ico.png">

		
	</head>

<!-- start of main body -->
	<body>
		<div class="whole-wrap">
		<div id="home"></div>
		<img id="globe-top" src="pictures/globe-top.png">
		<div class="nav">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#research">Research</a></li>
				<li><a href="#co-authors">Co-authors</a></li>
				<li><a href="#gallery">Gallery</a></li>
				<li><a href="#events">Events</a></li>
				<li><a href="#teaching">Teaching</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>

		<div class="container">

			<div class="header">
				<div id="name">Tobias M&uuml;ller</div>
			</div>

			<div id="intro">
				<p><?php
					$filename="text/intro.txt";
					$handle=fopen($filename,"r");

					$contents=fread
					($handle,filesize($filename));

					echo($contents);
					?></p>
			</div>

			<div id="research">
				<h1><span><a name="research">Research</a></span></h1>
				<p><?php
					$filename="text/research.txt";
					$handle=fopen($filename,"r");

					$contents=fread
					($handle,filesize($filename));

					echo($contents);
					?></p>
			</div>

			<div id="co-authors">
				<h1><span><a name="co-authors">Co-authors</a></span></h1>
				<p><?php
					$filename="text/co-authors.txt";
					$handle=fopen($filename,"r");

					$contents=fread
					($handle,filesize($filename));

					echo($contents);
					?></p>
			</div>

			<div id="gallery">
				<h1><span><a name="gallery">Gallery</a></span></h1>
				<p><?php
					$filename="text/gallery.txt";
					$handle=fopen($filename,"r");

					$contents=fread
					($handle,filesize($filename));

					echo($contents);
					?></p>
			</div>
	
			<div id="events">
				<h1><span><a name="events">Events</a></span></h1>
				<p><?php
					$filename="text/events.txt";
					$handle=fopen($filename,"r");

					$contents=fread
					($handle,filesize($filename));

					echo($contents);
					?></p>
			</div>

			<div id="teaching">
				<h1><span><a name="teaching">Teaching</a></span></h1>
				<p><?php
					$filename="text/teaching.txt";
					$handle=fopen($filename,"r");

					$contents=fread
					($handle,filesize($filename));

					echo($contents);
					?></p>
			</div>

			<div id="contact">
				<h1><span><a name="contact">Contact</a></span></h1>
				<p><?php
					$filename="text/contact.txt";
					$handle=fopen($filename,"r");

					$contents=fread
					($handle,filesize($filename));

					echo($contents);
					?></p>
			</div>

		</div>
		<img id="globe-bottom" src="pictures/globe-bottom.png">
		</div>
	</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!-- Mathjax embedding script -->
	<script type="text/javascript" src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
	<script type="text/javascript" src="functions.js"></script>

<!-- end of jquery scripts-->

</html>
