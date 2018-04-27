<?php

	class Ejemplo extends Controlador {
		private $mensaje = "Este es solo un ejemplo de la creación de un controlador. Tener en cuenta que el nombre del controlador comienza con Mayúsculas al igual que el nombre de la clase (mismo nombre del controlador)";
		
		public function __construct() {

		}

		public function index(){
			echo $this->mensaje;
		}
	}