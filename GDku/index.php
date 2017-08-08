<?php
	require "image.class.php";
	$src="../images/2.jpg";
	$image=new Image($src);
	//$image->thumb(300,150);
	//$image->show();
	
	$content="你好，妖精，我要吃了你";
	$font_url="../images/youyuan.ttf";
	$size=20;
	$color=array(
		0=>255,
		1=>255,
		2=>0,
		3=>20
		);
	$local=array(
		'x'=>20,
		'y'=>30
		);
	$angle=10;
	$image->fontMark($content,$font_url,$size,$color,$local,$angle);
	$image->show();







?>