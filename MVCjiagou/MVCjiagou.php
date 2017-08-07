<?php
	/**require_once('libs/Controller/testController.class.php');
	require_once('libs/Model/testModel.class.php');
	require_once('libs/View/testView.class.php');
	$testController = new testController();
	$testController->show();
	**/
	require_once('function.class.php');
	$controller=$_GET['controller'];
	$method=$_GET['method'];
	C($controller,$method);

?>