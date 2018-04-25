<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); // Queremos que PHP nos regrese cualquier error que nos aparezca. Es conveniente para desarrollo

require_once '../vendor/autoload.php';
include_once '../config.php';


$route = $_GET['route'] ?? '/';

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();
$router->get('/', function() {
	return 'Route /';
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;



?>