<?php

	/*
	Mapear la url ingresa en el navegador
	Ejemplo:
	www.misitioweb.com/articulos/editar/1
	Donde articulos es el controlador, editar es el método y 1 es el artículo (parámetro) a editar
	*/
	class Core {
		protected $controladorActual = 'home';
		protected $metodoActual = 'index';
		protected $parametros = [];

		// Constructor
		public function __construct(){
			$url = $this->getUrl();

			// Buscar en controladores si el archivo solicitado en la URL existe
			if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
				// Asignando al controlador actual el nuevo valor, una vez comprobada su existencia
				$this->controladorActual = ucwords($url[0]);
				
				// Liberar la variable
				unset($url[0]);
			}
			// Requerir el controlador
			require_once '../app/controllers/' . $this->controladorActual . '.php';
			$this->controladorActual = new $this->controladorActual;

			// Extraer el método articulos/ACTUALIZAR/22
			if(isset($url[1])) {
				if (method_exists($this->controladorActual, $url[1])) {
					$this->metodoActual = $url[1];
					unset($url[1]);
				}
			}
			// echo $this->metodoActual;

			$this->parametros = $url ? array_values($url) : [];

			// Llamar al callback del parametro
			call_user_func_array([$this->controladorActual,  $this->metodoActual], $this->parametros);


		}

		public function getUrl() {
			// echo $_GET['url'];

			if(isset($_GET['url'])) {
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				return $url;
			}
		}
	}