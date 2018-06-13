<?php 

namespace App\Controllers;
use Twig_Loader_Filesystem;

class BaseController {
	protected $templateEngine;


	//PODER INICIALIZAR TWIG Y TENERLO DISPONIBLE EN NUESTRA APP. LO HAREMOS DENTRO DE NUESTRO CONSTRUCTOR 
	public function __construct() {
		$loader = new Twig_Loader_Filesystem('../views'); //mostramos la ruta donde están las vistas
		$this->templateEngine = new \Twig_Environment($loader, [
			'debug' => true,
			'cache' => false
		]);
	
		$this->templateEngine->addFilter(new \Twig_SimpleFilter('url', function ($path) {
			return BASE_URL  . $path;	
		}));	


	}

	public function render($fileName, $data = []) {
		return $this->templateEngine->render($fileName, $data);
	}	
}

 ?>