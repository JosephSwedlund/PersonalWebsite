<!DOCTYPE html>
<html>
	<head>
		<title>Joseph Swedlund / Projects</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<style>
		a {color: white;}
		.otherlink {text-align: center;}
		#intro-textbox {text-align: center;}
	</style>

	<body>
		<h1 style="text-decoration: underline;">Joseph Swedlund's Personal Website</h1>
		<div id="linkbar">
			<a class="cbot" id="home" href="index.php">Home</a>
			<a class="cbot" id="learning" href="tutorials.php">Tutorials</a>
			<a class="cbot" id="about" href="journal.php">Journal</a>
			<a class="currentbut" style="color: white" href="projects.php">Projects</a>            
		</div>
		<div class="body-box">
			<br></br>	
			<?php
				$handle = fopen("projects/project_list.txt", "r");
				$card_count = fgets($handle, 4096);
				while(!feof($handle) && $i < $card_count){
					$project_link = fgets($handle, 4096);
					echo '<div class="project-card">';
					$project_line = fgets($handle, 4096);
					echo '<h2 class="project-title"><a href="'.$project_link.'">'. $project_line . '</a></h2>';
					$project_line = fgets($handle, 4096);
					echo '<a href="'.$project_link.'"><img class="project-image" src="'.$project_line.'"></a>'; 
					$project_line = fgets($handle, 4096);
					echo '<p class="project-summery">'.$project_line.'</p>';
					echo '</div>';
					$i++;
				}
	        		fclose($handle);
			?>

			<p style="font-size: 10px; clear: both">(This website is a work in progress - Joseph Swedlund)</p>
		</div>
	</body>
</html>

