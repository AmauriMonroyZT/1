<?php
require_once("conexion.php");
class Usuario extends Conexion{
	public function validar($us,$pass){
		$this->sentencia = "SELECT * FROM usuario WHERE usuario = '$us' AND password='$pass'";
		//echo $this->sentencia;
		$resultado = $this->obtener_sentencia();
		if($resultado->num_rows==1){
			return true;
		}else{
			return false;
		}
	}
	public function alta ($nombre,$pass,$tipo){
		$this->sentencia = "INSERT INTO usuario VALUES (null, '$nombre', '$pass', '$tipo')";
		$this->ejecutar_sentencia();
		if(value ==2){
		echo "<h2>Usuario Agregado</h2>";
	}
	}
}
?>