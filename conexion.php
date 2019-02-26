<?php
class Conexion{
	private $host="localhost";
	private $usuario="root";
	private $password="admin";
	private $base="usuarios";
	private $conexion;
	public $sentencia;

	private function abrir_conexion(){
		$this->conexion = new mysqli($this->host,
			$this->usuario,$this->password,
			$this->base);
	}

	private function cerrar_conexion(){
		$this->conexion->close();
	}

	public function ejecutar_sentencia(){
		$this->abrir_conexion();
		$this->conexion->query($this->sentencia);
		$this->cerrar_conexion();
	}//insertar, modificar o eliminar

	public function obtener_sentencia(){
		$this->abrir_conexion();
		$res = $this->conexion->query($this->sentencia);
		return $res;
	}//consultas
}
?>