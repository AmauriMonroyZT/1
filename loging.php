<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stile.css">
	<meta charset="utf-8">
</head>
<body>
<?php
require_once("encabezado.php");
?> 
<form action="" method="post">
Nombre: <br>
<input type="text" name="nombre"> <br>
Password: <br>
<input type="password" name="password">
<br>
<input type="submit" name="login" value="Ingresar">
</form>
<?php
    if(isset($_POST["login"])){
    require_once("admin/usuario.php");
    $obj=new Usuario();
    $nom=$_POST["nombre"];
    $pass=$_POST["password"];
    $bandera=$obj->validar($nom,$pass);
    if($bandera==true){
        echo "Bienvenido";
    }else{
        echo "Contraseña o Nombre de usuario incorrecto";
    }
}
?> 
</form>
</body>
</html>
