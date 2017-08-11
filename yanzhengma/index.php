<?php
	$image=imagecreatetruecolor(100, 30);
	$bgcolor=imagecolorallocate($image, 0, 255, 255);
	imagefill($image,0,0,$bgcolor);
	header('content-type:image/png');
	imagepng($image);
	imagedestroy($image);










?>