<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Breaking Benjamin</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta charset="utf-8"/>
	<link href="final.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<?php
		$Greeting = "";
		
		date_default_timezone_set("America/Chicago");
		
		$x = getdate();
		
		if ($x['hours'] >= 05 && $x['hours'] <= 11) {
			$Greeting = "Good morning";
		}
		else if ($x['hours'] >= 12 && $x['hours'] <= 16) {
			$Greeting = "Good afternoon";
		}
		else {
			$Greeting = "Good evening";
		}
		
	?>


	<header id="top">
		<img src="Images/logo.png" alt="Breaking Benjamin logo" title="Breaking Benjamin logo"/>
	</header>
	
	<nav>
	
		<ul>
			<li><a href="index.php" class="selected">Home</a></li>
			<li><a href="songs.php">Top Songs</a></li>
			<li><a href="discography.php">Discography</a></li>
			<li><a href="mailing.php">Mailing List</a></li>
		</ul>
	
	</nav>
	
	<div id="wrapper">
	
		<section id="main">
			<h1>Welcome<em>!</em></h1>
		
			<p><?php echo "$Greeting" ?> and welcome to the site! Breaking Benjamin is an American rock band founded in 1999 in Wilkes-Barre, Pennsylvania. Their official website is <a href="http://breakingbenjamin.com" target="_blank">BreakingBenjamin.com</a>.</p>
			<img src="Images/breakingband.jpg" alt="Breaking Benjamin band members" title="Breaking Benjamin band members"/>
		</section>
	
	</div>
	
	<footer>
	<p>Jessica Hoyer &copy; Fall 2019</p>
	</footer>


</body>
</html>