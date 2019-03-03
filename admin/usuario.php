<?php
require_once("../conexion.php");
class Usuario extends Conexion{
	public function validar($us,$pass){
		$this->sentencia = "SELECT * FROM usuarios WHERE usuario = '$us' AND password='$pass'";
		//echo $this->sentencia;
		$resultado = $this->obtener_sentencia();
		if($resultado->num_rows==1){
			return true;
		}else{
			return false;
		}
	}
	public function alta ($nombre,$pass,$tipo){
		$this->sentencia = "INSERT INTO usuario VALUES (null, '$nombre','$pass', '$tipo')";
		$this->ejecutar_sentencia();
		echo "<h2>Usuario Agregado</h2>";
	}

	public function consulta (){
		$this->sentencia = "SELECT * FROM usuario";
		return $this->obtener_sentencia();
	}

}
?>