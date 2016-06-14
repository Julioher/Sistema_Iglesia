<!doctype html>
<html>
<head>
<title>pantalla formulario atributo</title>
<meta charset="utf-8"/>
<script type="text/javascript" src="../js/jquery_p.js"></script>
<script type="text/javascript" src="../js/funciones_crudAt.js"></script>
<link rel="stylesheet" href="../css/proyecto_estilo.css"/>
</head>

<body background="fondo3.jpg">
<div id="padre"><!--inicio div padre-->
	<h2>Mantenimiento de atributos</h2>	
<!--<form action="../php/funciones_atributo.php" method="POST">  -->  <!--inicio del formulario-->
<form> 
	<table id="tbpadre" ><!--inicio tabla padre-->
		<tr> <!--inicio de primera fila-->
			<td><label>Id:</label></td>
			<td><input type="text"  name="txtidatributo" id="txtidatributo" size="70"/></td>		
		</tr><!--fin de primera fila-->
		
		<tr><!--inicio de segunda fila-->
			<td><label>Nombre:</label><td>
			<input type="text" name="txtnombreatributo" id="txtnombreatributo" size="70"/></td>
		</tr><!--fin de segunda fila-->
	</table> <!--fin tabla padre-->
		<p>
	<div id="mostrar">
			

		</div>
		<p>
	<input type="button" value="Buscar" name="btnBuscar" id="btnBuscar"  onclick="buscarDatos()" />
	<input type="button" value="Guardar" name="btnGuardar" id="btnGuardar" onclick="insertarDatos()" />
	<input type="button" value="Modificar" name="btnModificar" id="btnModificar"  onclick="modificarDatos()"/>
	<input type="button" value="Eliminar" name="btnEliminar" id="btnEliminar" onclick="eliminarDatos()"/>
</form> <!--fin del formulario-->
</div><!--fin div padre-->



</body>
</html>