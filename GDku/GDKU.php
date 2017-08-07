<?php
	//页面说明：这个页面是GD库技术的应用，包括三个方面：为图片添加文字水印、为图片添加图片水印、生成图片缩略图。
	//PHPGD库为图片添加文字水印
	/*打开图片*/
	//1.配置图片路径
//	$src="water.jpg";
	//2.获取图片信息
//	$info=getimagesize($src);
	//echo "<pre>";
	//print_r($info);用来打印关于图片的信息
	//3.通过图像的编号来获取图像的类型
//	$type=image_type_to_extension($info[2],false);
	//4.在内存中创建一个和我们图像类型一样的图像
//	$func="imagecreatefrom{$type}";
	//5.把图片复制到我们的内存中
//	$image=$func($src);
	/*操作图片*/
	//1.设置字体的路径
//	$font="youyuan.ttf";
	//2.填写我们的水印内容
//	$content="你好，X X";
	//3.设置字体的颜色和透明度
//	$col=imagecolorallocatealpha($image, 255, 255, 255, 50);
	//4.写入文字
//	imagettftext($image, 100, 0, 100, 400, $col, $font, $content);
	/*输出图片*/
	//浏览器输出
//	header("content-type:",$info['mime']);
//	$funs="image{$type}";
//	$funs($image);
	/*销毁图片*/
//	imagedestroy($image);



	
	//PHPGD库为图片添加图片水印
	/*打开图片*/
	//1.配置图片路径
	$src="../images/water.jpg";
	//2.获取图片的基本信息
	$info=getimagesize($src);
	//3.通过图像的编号来获取图片的类型
	$type=image_type_to_extension($info[2],false);
	//4.在内存中创建一个和我们图像类型一致的图像
	$func="imagecreatefrom{$type}";
	//5.把要操作的图片复制到内存中
	$image=$func($src);
	/*操作图片*/
	//1.设置水印路径
	$image_mark="../images/tu.jpg";
	//2.获取水印图片的基本信息
	$info2=getimagesize($image_mark);
	//3.通过水印的图像编号来获取水印的图片类型
	$type2=image_type_to_extension($info2[2],false);
	//4.在内存中创建一个和我们水印图像一致的图像类型
	$fun2="imagecreatefrom{$type2}";
	//5.把水印图片复制到内存中
	$water=$fun2($image_mark);
	//6.合并图片
	imagecopymerge($image, $water, 0,0, 0, 1, $info2[0], $info2[1], 30);
	//7.销毁水印图片
	imagedestroy($water);
	/*输出图片*/
	header("content-type:",$info['mime']);
	$funs="image{$type}";
	$funs($image);
	/*销毁图片*/
	imagedestroy($image);




	/*生成图片缩略图*/
	/*打开图片*/
	//1.配置图片路径
//	$src="water.jpg";
	//2.获取图片信息
//	$info=getimagesize($src);
	//3.通过编号来获取图片类型
//	$type=image_type_to_extension($info[2],false);
	//4.在内存中建立一个和图片类型一样的图像
//	$fun="imagecreatefrom{$type}";
	//5.把图片复制到内存中
//	$image=$fun($src);
	/*操作图片*/
	//1.在内存中建立一个宽300，高200的真色彩图片
//	$image_thumb=imagecreatetruecolor(300, 200);
	//2.核心步骤 将原图复制到新建的真色彩图片上，并且按照一定的比例压缩
//	imagecopyresampled($image_thumb, $image, 0, 0, 0, 0, 300, 200, $info[0], $info[1]);
	//3.销毁原始图片
//	imagedestroy($image);
	/*输出图片*/
//	header("content-type:",$info['mime']);
//	$funs="image{$type}";
//	$funs($image_thumb);
	/*销毁图片*/
//	imagedestroy($image);

?>