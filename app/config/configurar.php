<?php

// Leemos el archivo de configuración
$config = parse_ini_file('config.ini', true);

// Conexion a la base de datos
define('DB_HOST', $config['database']['host']);
define('DB_USER', $config['database']['username']);
define('DB_PASS', $config['database']['password']);
define('DB_NAME', $config['database']['schema']);

// Ruta de la aplicacion
define('RUTA_APP',dirname(dirname(__FILE__)));

// Ruta de la URL
// Ejemplo http://localhost/render2_mvc
define('RUTA_URL', $config['application']['route']);

// Datos del Sitio
define('NAME_APP', $config['application']['name']);
define('VERSION_APP', $config['application']['version']);