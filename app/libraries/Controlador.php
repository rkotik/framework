<?php

	class Controlador {
		
		public function __construct() {

		}

		public function modelo($modelo) {
			require_once '../app/models/' . $modelo . '.php';
			return new $modelo();
		}

		public function vista($vista, $datos = []) {
			if(file_exists('../app/views/' . $vista . '.php')) {
				require_once '../app/views/' . $vista . '.php';
			} else {
				die('La vista no existe');
			}
		}

	}
