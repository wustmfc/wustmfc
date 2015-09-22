<?php 
error_reporting(0);
// PHPExcel 
require_once dirname(__FILE__) . 'PHPExcel.php';
// 生成新的excel对象
$objPHPExcel = new PHPExcel();
// 设置excel文档的属性
$objPHPExcel->getProperties()->setCreator("Sam.c")
             ->setLastModifiedBy("Sam.c Test")
             ->setTitle("Microsoft Office Excel Document")
             ->setSubject("Test")
             ->setDescription("Test")
             ->setKeywords("Test")
             ->setCategory("Test result file");

// 将数据中心图片放在J1单元格内
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setPath('./image/1.jpg');
$objDrawing->setWidth(400);
$objDrawing->setHeight(123);
$objDrawing->setCoordinates('J1');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

// 从浏览器直接输出$filename
header("Pragma: public");
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("Content-Type:application/force-download");
header("Content-Type: application/vnd.ms-excel;");
header("Content-Type:application/octet-stream");
header("Content-Type:application/download");
header("Content-Disposition:attachment;filename=".$filename);
header("Content-Transfer-Encoding:binary");
$objWriter->save("./image");
?>