<?php
	$dir=dirname(__FILE__);
	require $dir."/PHPExcel/PHPExcel.php";
	$objPHPExcel=new PHPExcel();
	$objSheet=$objPHPExcel->getActiveSheet();
	$objSheet->setTitle("diyige");
	$objSheet->setCellValue("A1","姓名")->setCellValue("B1","分数");
	$objSheet->setCellValue("A2","张三")->setCellValue("B2","50");
	$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,"Excel2007");
	$objWriter->save($dir."/demo.xlsx");
	
?>