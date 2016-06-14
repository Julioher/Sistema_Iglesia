<!doctype html>
<html>
<head>
<title>pantalla formulario feligres</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="../css/estilo_pan_form.css"/>
<style>
#padre{
background-color: #ffd180;
text-align: center;
width:50%;
margin-left:25%;
}
#tbpadre, td{
border:0px solid black;
margin-right: auto;
margin-left: auto;
}
#mostrar{
height: 150px;
background-color: white;
border: 1px solid gray;
border-radius: 5px;
margin-left: 2%;
margin-right: 2%;
}
#padre{
border-radius: 5px;
border: 1px solid gray;
}

body{
background-size: 100vw 100vh;
background-attachment: fixed;
}
.vista{
border: 0.1px solid gray;
}
</style>
</head>




<body background="fondo3.jpg">
<div id="padre"><!--inicio div padre-->
	<h2>FORMULARIO</h2>
	
<form action="../php/principal.php" method="POST"><!--inicio del formulario-->
	<table id="tbpadre" border><!--inicio tabla padre-->
		

		<tr> <!--inicio de primera fila-->
			<td><label>Id</label></td>
			<td><input type="text"  name="txtid" id="txtid" size="28"/></td>
			
		</tr><!--fin de primera fila-->





		<tr> <!--inicio de primera fila-->
			<td><label>Primer nombre</label></td>
			<td><input type="text"  name="txtPrimer_nombre" id="txtPrimer_nombre" size="28"/></td>
			<td></td>
			<td>Segundo nombre</td>
			<td><input type="text" name="txtSegundo_nombre" id="txtSegundo_nombre" size="28"/></td>
		</tr><!--fin de primera fila-->
		
		<tr><!--inicio de segunda fila-->
			<td><label>Primer apellido</label></td>
			<td><input type="text" name="txtPrimer_apellido" id="txtPrimer_apellido" size="28"/></td>
			<td></td>
			<td>Segundo apellido</td>
			<td><input type="text" name="txtSegundo_apellido" id="txtSegundo_apellido" size="28"/></td>
		</tr><!--fin de segunda fila-->
		
		<tr><!--inicio de tercera fila-->
			<td><label>Dirección</label></td>
			<td><input type="text" name="txtDireccion" id="txtDireccion" size="28"/></td>
			<td></td>
			<td>Fecha de nacimiento</td>
			<td><input type="text" name="txtFecha_de_nacimiento" id="txtFecha_de_nacimiento" size="18"/></td>
		</tr><!--fin de tercera fila-->
		
		<tr><!--inicio de cuarta fila-->
			<td><label>Teléfono casa</label></td>
			<td><input type="text" name="txtTel_casa" id="txtTel_casa" size="28"/></td>
			<td></td>
			<td><label>Teléfono celular</label></td>
			<td><input type="text" name="txtTel_Movil" id="txtTel_Movil" size="28"/></td>
		</tr><!--fin de cuarta fila-->
		
		<tr><!--inicio de quinta fila-->
			<td><label>Género</label> </td>
			<td><select name="cmbGenero" id="cmbGenero" style="width:198px">
					<option value="" >Seleccione...</option>
					<option value="M">Masculino</option>
					<option value="F">Femenino</option>
				</select></td>
			<td></td>
			<td><label>Grupo de adoración</label></td>
			<td><select name="cmbGrupoAdoracion" id="cmbGrupoAdoracion">
				<option value="">Seleccione...</option>
				<option value="1">Amor y fe</option>
				<option value="2">Aumenta la fe</option>
				<option value="3">Caminando con Jesús y María</option>
				<option value="4">Cristo es el camino</option>
				<option value="5">Dame un nuevo corazón</option>
				<option value="6">Jesús el buen Pastor</option> 
				<option value="7">Juan Pablo II</option>
				<option value="8">Ovejas de Jesús</option>
				<option value="9">Pescadores</option>	
				<option value="10">San Francisco de Asis</option>
				<option value="11">Santa María del camino</option>
				<option value="12">Santa María madre de Dios</option>
				<option value="13">Santiago Apóstol</option>
				<option value="14">Segidores de Cristo</option>
				<option value="15">Un gran amor</option>
				<option value="16">Un sólo corazón</option>
				<option value="17">Viviendo en fe</option> 
			</select></td>
		</tr> <!--fin de quinta fila-->
		
		<tr><!--inicio de sexta fila-->
			<td><label>Cargo</label></td>
			<td><select name="cmbCargo" id="cmbCargo" style="width:198px">
			<option value="">Seleccione...</option>	
			<option value="C">Coordinador</option>
			<option value="S">Suboordinador</option>
			</select></td>
			<td></td>
			<td><label>Estado</label></td>
			<td><select name="cmbEstado" id="cmbEstado"style="width:198px">
			<option value="">Seleccione...</option>	
			<option value="1">Activo</option>
			<option value="0">Inactivo</option>
			</select></td>
		</tr><!--fin de sexta fila-->
		
		
		
		<tr>
			<td colspan="2" height="20px"></td>
			<td></td>
			<td colspan="2"></td>
		</tr>
		
		
		
		
		<tr><!--inicio de septima fila-->
			<td colspan="2"><label>Aspectos espirituales</label></td>
			<td></td>
			<td colspan="2"><label>Ministerio en el que  gustaría servir</label></td>
		</tr><!--fin de septima fila-->
		
		<tr><!--inicio de septima fila-->
			<td colspan="2">
				<div id="divAE" style="width 200px; height: 100px; background: #fff;
				 border: 1px solid gray ; overflow-y: auto;"> <!--inicio de divAE-->
						<?php
							include ("../php/conexion.php");
							//$con=conectar();
							
							$registros = mysql_query("SELECT * FROM atributo");

							echo "<table>";
							$n=1;
							while ($reg = mysql_fetch_array($registros)){
								$n++;
								echo "<tr><td><input type='checkbox'></td><td style=' text-align: left;'>".$reg['1']."</td></tr>";
																			
						}
						echo "</table>";

						$insertar_atributo="INSERT into atributo(nombre) values('$reg')";
						$resultado= mysql_query($insertar_atributo) or die("error al enviar");
						mysql_close($conexion);			
						?>
				
				</div> <!--Fin de divAE-->
			</td>
			<td></td>
			<td colspan="2">
				<div id="divMS" style="width 200px; height: 100px; background: #fff;
				 border: 1px solid gray; overflow-y: auto;"> <!--inicio de divMS-->
					<?php
							include ("../php/conexion.php");
							//$con=conectar();
							
							$registros = mysql_query("SELECT * FROM ministerio ORDER BY nombre");

							echo "<table>";
							while ($reg = mysql_fetch_array($registros)){
								echo "<tr><td><input type='checkbox'></td><td>".$reg['1']."</td></tr>";						
																	
						}
						echo "</table>";
						mysql_close($conexion);
						
			//$resultado .="</table>";
						
						?>
				
				</div> <!--fin de divMS-->
			
			</td>
		</tr><!--fin de septima fila-->
		
		<tr colspan="2"><!--inicio de octavo fila-->
			<!--<td colspan="2"><table  class="vista" width="300px">
				<tr>
					<td class="vista"><input value="cbBautismo"name="cbBautismo" type="checkbox"/>Bautismo</td>
					<td class="vista"><input value="cbConfirma" name="cbConfirma" type="checkbox"/>Confirma</td>	
				</tr>
				<tr>
					<td class="vista"><input value="cbComunión" name="cbComunión" type="checkbox"/>Comunión</td>
					<td class="vista"><input value="cbRetiro" name="cbRetiro" type="checkbox"/>Retiro de inicio</td>
				</tr>
				<tr>
					<td class="vista" colspan="2"><input value="cbCrecimientos" name="cbCrecimientos" type="checkbox"/>Crecimientos</td>
				</tr>
			</table></td>
		
			<td></td>
			
			<td colspan="2"><table class="vista"  width="325px" >
				<tr>
					<td class="vista"><input type="checkbox" value="cbBienvenida" name="cbBienvenida" >Bienvenida</td>
						<td class="vista"><input value="cbLiturgia"name="cbLiturgia" type="checkbox"/>Liturgia</td>
				</tr>
				<tr>
					<td class="vista"><input  type="checkbox" value="cbCrecimiento" name="cbCrecimiento"/>Crecimiento</td>
					<td class="vista"><input value="cbJóvenes"  name="cbJóvenes" type="checkbox"/>Jóvenes</td>
				
				</tr>
				<tr>
					<td  class="vista"><input value="cbMisericordia" name="cbMisericordia" type="checkbox"/>Misericordia</td>
						<td class="vista" ><input value="cbMúsica" name="cbMúsica" type="checkbox"/>Música</td>
				</tr>
				<tr>
					<td class="vista"><input value="cbPredicación" name="cbPredicación" type="checkbox"/>Predicación</td>
					<td class="vista"><input value="cbNiños" name="cbNiños" type="checkbox"/>Niños</td>
					
				</tr>
				<tr>
					<td class="vista" colspan="2"><input value="cbSanación" name="cbSanación" type="checkbox"/>Sanación</td>
				</tr>
				</table>
			</td>-->
			
		</tr><!--fin de octavo fila-->
		
		
		
	</table> <!--fin tabla padre-->
	<p>
	<div id="mostrar">
		</div>
		<p>
	<input type="submit" value="Buscar" name="btnBuscar"/>
	<input type="submit" value="Guardar" name="btnGuardar"/>
	<input type="submit" value="Modificar" name="btnModificar"/>
	<input type="submit" value="Eliminar" name="btnEliminar"/>
</form> <!--fin del formulario-->
</div><!--fin div padre-->
</body>
</html>