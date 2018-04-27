<?php

class Usuario {
	private $db;

	public function __construct() {
		$this->db = new Base;
	}

	// public function obtenerUsuarios() {
	// 	$this->db->query('SELECT u.id_usuario as id_usuario, u.nombre as nombre, u.nacimiento as nacimiento, u.email as email, u.telefono as telefono, CONCAT(p.nombre, " (", p.iso, ")") as pais FROM usuarios u INNER JOIN paises p ON u.pais = p.id');
	// 	$resultados = $this->db->registros();
	// 	return $resultados;
	// }
	
	// public function agregarUsuario($datos){
	// 	$this->db->query('INSERT INTO usuarios (nombre, email, telefono) VALUES (:nombre, :email, :telefono);');
		
	// 	// Vinculamos los valores
	// 	$this->db->bind(':nombre', $datos['nombre']);
	// 	$this->db->bind(':email', $datos['email']);
	// 	$this->db->bind(':telefono', $datos['telefono']);
		
	// 	// Ejecutar
	// 	if ($this->db->execute()){
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }

	// public function obtenerUsuarioId($id) {
	// 	$this->db->query('SELECT * FROM usuarios WHERE id_usuario = :id');
	// 	$this->db->bind(':id', $id);
	// 	$resultados = $this->db->registro();
	// 	return $resultados;
	// }

	// public function actualizarUsuario($datos) {
	// 	$this->db->query('UPDATE usuarios SET nombre = :nombre, email = :email, telefono = :telefono WHERE id_usuario = :id');
		
	// 	// Vinculamos los valores
	// 	$this->db->bind(':id', $datos['id_usuario']);
	// 	$this->db->bind(':nombre', $datos['nombre']);
	// 	$this->db->bind(':email', $datos['email']);
	// 	$this->db->bind(':telefono', $datos['telefono']);
		
	// 	// Ejecutar
	// 	if ($this->db->execute()){
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}	
	// }

	// public function eliminarUsuario($datos) {
	// 	$this->db->query('DELETE FROM usuarios WHERE id_usuario = :id');
	// 	$this->db->bind(':id', $datos['id_usuario']);

	// 	// Ejecutar
	// 	if ($this->db->execute()){
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }
	
}