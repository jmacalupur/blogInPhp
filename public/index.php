<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); // Queremos que PHP nos regrese cualquier error que nos aparezca. Es conveniente para desarrollo

require_once '../vendor/autoload.php';
include_once '../config.php';


$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL', $baseUrl);



$route = $_GET['route'] ?? '/';

function render($fileName, $params = []) {
	ob_start(); //va a almacenar salida internamente
	extract($params);
	include $fileName;
	return ob_get_clean(); //todo lo que se hizo antes de esta línea va a regresar como si fuera una cadena
} 

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->controller('/admin', App\Controllers\Admin\IndexController::class);
$router->controller('/admin/posts', App\Controllers\Admin\PostController::class);
$router->controller('/', App\Controllers\IndexController::class);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;



?>