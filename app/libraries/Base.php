<?php

	// Clase para conexion a la base de datos y ejecutar consultas, utilizando PDO
	class Base {
		private $host = DB_HOST;
		private $user = DB_USER;
		private $pass = DB_PASS;
		private $name = DB_NAME;

		private $dbh;
		private $stmt;
		private $error;

		public function __construct() {
			// Configurar conexion
			$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name;
			$opciones = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);

			// Crear una instancia de PDO
			try {
				$this->dbh = new PDO($dsn, $this->user, $this->pass, $opciones);
				$this->dbh->exec('set names utf8');
			} catch (PDOException $e) {
				$this->error = $e->getMessage();
				echo $this->error;
			}
		}

		// Prepara la consulta
		public function query($sql) {
			$this->stmt = $this->dbh->prepare($sql);
		}

		// Vincula la consulta a BIND
		public function bind($parametro, $valor, $tipo = null) {
			if (is_null($tipo)) {
				switch (true) {
					case is_int($valor):
						$tipo = PDO::PARAM_INT;
					break;
					case is_bool($valor):
						$tipo = PDO::PARAM_BOOL;
					break;
					case is_null($valor):
						$tipo = PDO::PARAM_NULL;
					break;
					default:
						$tipo = PDO::PARAM_STR;
					break;
				}
				$this->stmt->bindValue($parametro, $valor, $tipo);
			}
		}

		// Ejecuta la consulta
		public function execute() {
			return $this->stmt->execute();
		}
			
		// Obtiene los registros
		public function registros() {
			$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}

		// Obtiene un registro
		public function registro() {
			$this->execute();
			return $this->stmt->fetch(PDO::FETCH_OBJ);
		}

		// Obtiene el total de filas que coinciden
		public function rowCount() {
			return $this->stmt->rowCount();
		}
		
	}