<!DOCTYPE html>
<html>

<?php
	$handle = fopen("project_list.txt", "r");
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

<iframe width="420" height="315"
</iframe>

</html>
