<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Breaking Benjamin</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta charset="utf-8"/>
	<link href="final.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<header id="top">
		<img src="Images/logo.png" alt="Breaking Benjamin logo" title="Breaking Benjamin logo"/>
	</header>
	
	<nav>
	
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="songs.php" class="selected">Top Songs</a></li>
			<li><a href="discography.php">Discography</a></li>
			<li><a href="mailing.php">Mailing List</a></li>
		</ul>
	
	</nav>
	
	<div id="wrapper">
	
		<section id="main">
			
			<h1>Top Songs</h1>
			
			<p><b>My Favorite Song:</b> There are so many good ones, but after relistening to all of their songs while coding this site, I was struck by <em>The Dark Of You</em> from their album <em>Ember</em>. It's a slow, beautiful, emotional song with amazing lyrics.</p>
			
			<b>Top 10 Songs (from Spotify)</b>
			
			<?php
			
			$Songs = array("I Will Not Bow", "The Diary of Jane", "Angels Fall", "Blood", "Dance With The Devil", "Ashes of Eden", "Red Cold River", "Failure", "So Cold", "Breath");
			
			echo "<ol>";
			
			foreach ($Songs as $Song) {
				echo "<li>$Song</li>";
			}
			
			echo "</ol>";
			
			?>
			
			
		</section>
	
	</div>
	
	<footer>
	<p>Jessica Hoyer &copy; Fall 2019</p>
	</footer>


</body>
</html>