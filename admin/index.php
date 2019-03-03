<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../stile.css">
</head>
<body>
	<?php
require_once("encabezado.php")
?>
	 <ul>
	 	<a href="?sec=us"><li>Usuario</li></a>
	 </ul>
	 <?php 
if (isset($_GET["sec"])) {
if ($_GET["sec"]=="us") {
	require_once("vista usuario.php");
}
}


	  ?>
</body>
</html>