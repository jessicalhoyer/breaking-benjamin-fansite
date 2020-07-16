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
			<li><a href="songs.php">Top Songs</a></li>
			<li><a href="discography.php" class="selected">Discography</a></li>
			<li><a href="mailing.php">Mailing List</a></li>
		</ul>
	
	</nav>
	
	<div id="wrapper">
	
		<section id="main">
			
			<h1>Discography</h1>
			
			<?php
			
			$AlbumRelease = array (
				"Saturate" => "August 27, 2002",
				"We Are Not Alone" => "June 29, 2004",
				"Phobia" => "August 9, 2006",
				"Dear Agony" => "September 29, 2009",
				"Dark Before Dawn" => "June 23, 2015",
				"Ember" => "April 13, 2018",
				"Aurora" => "January 24, 2020");
			
			echo "<table>" .
				"<tr>" .
				"<th>Album</th>" .
				"<th>Release Year</th>" .
				"</tr>";
			
			foreach ($AlbumRelease as $Date) {
				echo "<tr>";
				echo "<td>" . key($AlbumRelease) . "</td>";
				echo "<td>$Date</td>";
				echo "</tr>";
				next($AlbumRelease);
			}
			
			
			echo "</table>";
			
			?>
			
		</section>
	
	</div>
	
	<footer>
	<p>Jessica Hoyer &copy; Fall 2019</p>
	</footer>


</body>
</html>