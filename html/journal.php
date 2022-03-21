
<!DOCTYPE html>
<html>
	<head>
		<title>Joseph Swedlund / About Me</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<style>
		#manHeader {background-color: black; color: lightgreen;}
		h2 {background-color: black; color: lightgreen;}
		#para0 {float: left; max-width: 45%;  margin-top: 20px;}
		#para1 {float: right; max-width: 45%; margin-top: 20px;}	
		#manifesto {width: 100%; clear: both; margin 10px; max-width 95%; text-align: center;}
	</style>

	<body>
		<h1 style="text-decoration: underline;">Joseph Swedlund's Personal Website</h1>
		<div id="linkbar">
			<a class="cbot" id="home" href="index.php">Home</a>
			<a class="cbot" id="learning" href="tutorials.php">Tutorials</a>
			<a class="currentbut" style="color: green;" href="journals.php">Journal</a>
			<a class="cbot" id="projects" href="projects.php">Projects</a>            
		</div>

		<div class="body-box">
			<div>
				<div id="para0">
					<h2 class="card-header">Some Personal Info:</h2>
					
                        <p></p>
				</div>
			
				<div id="para1">
					<h2 class="card-header">Current Events In My Life:</h2>
				    <p>Below is an index of all of my journal entries.</p>
                </div>
			</div>
			<div id="manifesto">
				<br> </br>
				<h1 id="manHeader"></h1>
				<?php
					$manifesto = file_get_contents("manifesto.txt");
					echo "<p style=\"background-color: darkgreen; border: 2px solid black;\">" .  $manifesto .  "</p>";	
				?>
			</div>	
			<p style="font-size: 10px">(This website is a work in progress - Joseph Swedlund)</p>
		</div>
	</body>
</html>

