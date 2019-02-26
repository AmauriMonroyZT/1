<SECTION id="vista">
	<form action= "" method="post">
	Nombre de Usuario : <input type="text" name="nombre">	
	<br>
	Contraseña: <input type="password" name="pass">
	<br>
	Tipo: 
	<article>
	<select name="tipo">
		<option value="1">Tutor</option>
		<option value="2">Tutorado</option>
		<option value="3">Ambos</option>>
</select>
</article>
<br>
<input type="submit" name="guardar" value="Guardar">
</form>
<?php 
require_once("usuario.php");
	$obj = new Usuario();
if (isset($_POST["guardar"])) {
	
	$obj->alta($_POST["nombre"], $_POST["pass"], $_POST["tipo"]);

}

$res = $obj -> consulta();
 ?>
 <table>
 	<tr>
 		<th>Usuario</th>
 		<th>Password</th>
 		<th>Tipo</th>
 			<th>Eliminar</th>
 				<th>Modificar</th>
		 </tr>
		 <?php
           while ($fila = $res-> fetch_assoc()) {
           	echo "<tr>";
           	echo "<td>",$fila["usuario"],"</td>";
           	echo "<td>","**********","</td>";
           	echo "<td>",$fila["tipo"],"</td>";
           	echo "</tr>";
           	
           }

		 ?>
		 </table>
		</section>