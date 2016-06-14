<!doctype html>
<html>
<head>
<title>pantalla formulario ministerio</title>
<meta charset="utf-8"/>
<script type="text/javascript" src="../js/jquery_p.js"></script>
<script type="text/javascript" src="../js/funciones_crudMi.js"></script>
<link rel="stylesheet" href="../css/proyecto_estilo.css"/>
</head>



<body background="fondo3.jpg">
<div id="padre"><!--inicio div padre-->
	<h2>Mantenimiento de ministerios</h2>
	
<form>    <!--inicio del formulario-->
	<table id="tbpadre" ><!--inicio tabla padre-->
		<tr> <!--inicio de primera fila-->
			<td><label>Id:</label></td>
			<td><input type="text"  name="txtidministerio" id="txtidministerio" size="70"/></td>		
		</tr><!--fin de primera fila-->
		
		<tr><!--inicio de sexta fila-->
			<td><label>Nombre:</label><td>
			<input type="text" name="txtnombreministerio" id="txtnombreministerio" size="70"/></td></td>
		</tr><!--fin de sexta fila-->
		
	</table> <!--fin tabla padre-->
	<p>
	<div id="mostrar">
	</div>
	<p>
	<input type="button" value="Buscar" name="btnBuscar"/>
	<input type="button" value="Guardar" name="btnGuardar" onclick="insertarDatos()"/>
	<input type="button" value="Modificar" name="btnModificar"  onclick="modificarDatos()"/>
	<input type="button" value="Eliminar" name="btnEliminar" onclick="eliminarDatos()"/>
</form> <!--fin del formulario-->
</div><!--fin div padre-->
</body>
</html>