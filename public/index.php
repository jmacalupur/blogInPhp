<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); // Queremos que PHP nos regrese cualquier error que nos aparezca. Es conveniente para desarrollo
include_once '../config.php';

$route = $_GET['route'] ?? '/';
switch ($route) {
	case '/':
		require '../index.php';
		break;
	case '/admin':
		require '../admin/index.php';
		break;
	case '/admin/posts':
		require '../admin/posts.php';
		break;
	default:
		break;
}

?>