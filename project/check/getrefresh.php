<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/project.php');

	$pro = new Project();

		$checkrefresh = $pro->getRefresh();


	


?>