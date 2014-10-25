<?php
#################check if motion is running ######################
function checkMotion($cs) {
	
	exec("pgrep motion", $output, $return);

	if ($cs == "on") {

		if ($return==0) { $img = "on_on.png"; }
		else { 	$img = "on_off.png"; }

	}

	if ($cs == "off") {

		if ($return==0) { $img = "off_off.png"; }
		else { 	$img = "off_on.png"; }

	}

	$image = imagecreatefrompng($img);

	header('Content-Type: image/png');

	imagepng($image);
	imagedestroy($image);
}

################## Start/stop motion ###############

function doMotion($com) {

	if($com=="start") { 

		exec("sudo /usr/bin/motion"); 
	}
	
	if($com=="stop") {
		exec("sudo /usr/bin/pkill motion"); 
		
	}

	echo "<script>onload:setInterval(function(){window.location.href = 'index.php';},3000);</script>";
}




?>
