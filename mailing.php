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
			<li><a href="discography.php">Discography</a></li>
			<li><a href="mailing.php" class="selected">Mailing List</a></li>
		</ul>
	
	</nav>
	
	<div id="wrapper">
	
		<section id="main">
			
			<h1>Mailing List</h1>
			
			
			<?php
			
			// Display form by default
			$DisplayForm = True;
			
			
			if (isset($_POST['Submit'])) {
				
				// Gather the form inputs
				$FName = $_POST['fname'];
				$LName = $_POST['lname'];
				$Birth = $_POST['birthdate'];
				$Email = $_POST['email'];
				$Phone = $_POST['phone'];
				$Address = $_POST['address'];
				$City = $_POST['city'];
				$State = $_POST['state'];
				$Zip = $_POST['zip'];
				$Comment = $_POST['comment'];
				
				// Check if they're filled out correctly
				if (empty($FName) || empty($LName) || empty($Birth) || empty($Email) || empty($Phone) || empty($Address) || empty($City) || empty($State) || empty($Zip)) {
					echo "<p class=\"error\">Please fill out all required fields!</p>";
				}
				else {
					$DisplayForm = False;
				}
			}
			
			if ($DisplayForm) {
			?>
			
			<p>Fill out this form to sign up for our mailing list!</p>
			
			<form name="MailingList" action="mailing.php" method="POST">
			
			<label for="fname">First Name:</label><input type="text" name="fname"/>
			<br/><br/>
			<label for="lname">Last Name:</label><input type="text" name="lname"/>
			<br/><br/>
			<label for="birthdate">Birthdate:</label> <input type="date" name="birthdate"/>
			<br/><br/>
			<label for="email">Email Address:</label> <input type="email" name="email"/>
			<br/><br/>
			<label for="phone">Phone Number:</label> <input type="tel" name="phone"/>
			<br/><br/>
			<label for="address">Street Address:</label> <input type="text" name="address" size="50"/>
			<br/><br/>
			<label for="city">City:</label> <input type="text" name="city"/>
			<label for="state">State:</label>
				<select name="state" id="state">
				<option value=""></option>
				<option value="AL">AL</option>
				<option value="AK">AK</option>
				<option value="AZ">AZ</option>
				<option value="CA">CA</option>
				<option value="CO">CO</option>
				<option value="CT">CT</option>
				<option value="DE">DE</option>
				<option value="FL">FL</option>
				<option value="GA">GA</option>
				<option value="HI">HI</option>
				<option value="ID">ID</option>
				<option value="IL">IL</option>
				<option value="IN">IN</option>
				<option value="IA">IA</option>
				<option value="KS">KS</option>
				<option value="KY">KY</option>
				<option value="LA">LA</option>
				<option value="ME">ME</option>
				<option value="MD">MD</option>
				<option value="MA">MA</option>
				<option value="MI">MI</option>
				<option value="MN">MN</option>
				<option value="MS">MS</option>
				<option value="MO">MO</option>
				<option value="MT">MT</option>
				<option value="NE">NE</option>
				<option value="NV">NV</option>
				<option value="NH">NH</option>
				<option value="NJ">NJ</option>
				<option value="NM">NM</option>
				<option value="NY">NY</option>
				<option value="NC">NC</option>
				<option value="ND">ND</option>
				<option value="OH">OH</option>
				<option value="OK">OK</option>
				<option value="OR">OR</option>
				<option value="PA">PA</option>
				<option value="RI">RI</option>
				<option value="SC">SC</option>
				<option value="SD">SD</option>
				<option value="TN">TN</option>
				<option value="TX">TX</option>
				<option value="UT">UT</option>
				<option value="VT">VT</option>
				<option value="VA">VA</option>
				<option value="WA">WA</option>
				<option value="WV">WV</option>
				<option value="WI">WI</option>
				<option value="WY">WY</option>
				</select>
			
			<label for="zip">Zip:</label> <input type="text" name="zip" size="10"/>
			
			<br/><br/>
			
			<label for="comment">Comments (optional):</label>
			<br/>
			<textarea name="comment" cols="60" rows="8"></textarea>
			
			<br/><br/>
			
			<a href="example@example.com" class="button" name="SendEmail">Send an Email!</a>
			<br/>
			<input type="submit" name="Submit" value="Submit" class="button"/>
			<input type="reset" name="Reset" value="Reset" class="button"/>
			
			</form>
			
			<?php
			}
			
			else {
				
				$FName = $_POST['fname'];
				$LName = $_POST['lname'];
				$Birth = $_POST['birthdate'];
				$Email = $_POST['email'];
				$Phone = $_POST['phone'];
				$Address = $_POST['address'];
				$City = $_POST['city'];
				$State = $_POST['state'];
				$Zip = $_POST['zip'];
				$Comment = $_POST['comment'];
				
				$BirthDate = $_POST['birthdate'];
				$BirthYear = substr($BirthDate, 0, 4);
				$CurrentDate = getdate();
				$CurrentYear = $CurrentDate['year'];
				
				$Age = $CurrentYear - $BirthYear;
				
				
				
				// if user is 18 or older
				if ($Age >= 18) {
					echo "<p>Thank you for signing up for our mailing list!</p>" .
						"<p>Here is the information you entered:</p>" .
						"<p><b>First Name:</b> $FName</p>" .
						"<p><b>Last Name:</b> $LName</p>" .
						"<p><b>Birthdate:</b> $Birth</p>" .
						"<p><b>Email Address:</b> $Email</p>" .
						"<p><b>Phone Number:</b> $Phone</p>" .
						"<p><b>Street Address:</b> $Address</p>" .
						"<p><b>City:</b> $City</p>" .
						"<b>State:</b> $State</p>" .
						"<p><b>Zip:</b> $Zip</p>" .
						"<p><b>Comments:</b></p>";
						if (empty($Comment)) {
							echo "<p>None</p>";
						}
						else {
							echo "<p>$Comment</p>";
						}
					echo "<a class=\"button\" href=\"mailing.php\">Back to Mailing List</a>";
				}
				
				// if user is 13-18
				else if ($Age >= 13 && $Age < 18) {
					echo "<p>You will be allowed to join our mailing list if you have your parent or guardian's permission.</p>";
					echo "<a class=\"button\" href=\"mailing.php\">Back to Mailing List</a>";
				}
				
				// if user is younger than 13
				else {
					echo "<p>We're sorry, but you must be 13 years or older to join the mailing list.</p>";
					echo "<a class=\"button\" href=\"mailing.php\">Back to Mailing List</a>";
				}
			}
			
			?>
			
			
		</section>
	
	</div>
	
	<footer>
	<p>Jessica Hoyer &copy; Fall 2019</p>
	</footer>


</body>
</html>
