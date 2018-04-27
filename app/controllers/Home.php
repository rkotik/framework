<?php

	class Home extends Controlador {
		
		public function __construct() {
			
		}

		public function index() {

			$datos = [
				'titulo' => 'Bienvenidos al Framework MVC en PHP',
			];
			$this->vista('home/index', $datos);
		}

	}
