<?php 

$dbHost = 'localhost';
$dbName = 'cursoPHP';
$dbUser = 'root';
$dbPass = '';

try {
	$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass); //es una clase para que haga conexion. Que recibe tres paraámetros.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo $e->getMessage();
}
 ?>