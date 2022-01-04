<?php
	$controller = $_GET['controller'];
	require('view/' . $controller . '.php');
	$controller = ucfirst($controller); 
	$request = new $controller; 

?>