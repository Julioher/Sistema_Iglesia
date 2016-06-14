

<?php

include ("../php/conexion.php");
//$conexion=conectar();
echo "conexión buena <br>";

//variables que van a la tabla feligres
$txtPrimer_nombre = $_POST['txtPrimer_nombre'];
$txtSegundo_nombre = $_POST['txtSegundo_nombre'];
$txtPrimer_apellido = $_POST['txtPrimer_apellido'];
$txtSegundo_apellido = $_POST['txtSegundo_apellido'];
$txtDireccion = $_POST['txtDireccion'];
$txtFecha_de_nacimiento = $_POST['txtFecha_de_nacimiento'];
$txtTel_casa = $_POST['txtTel_casa'];
$txtTel_Movil = $_POST['txtTel_Movil'];
$cmbGenero = $_POST['cmbGenero'];
$cmbGrupoAdoracion = $_POST['cmbGrupoAdoracion'];
$cmbCargo = $_POST['cmbCargo'];
$cmbEstado = $_POST['cmbEstado'];

//variables que van a la tabla atributo
/*$txtnombreatributo = $_POST['txtnombreatributo'];
$insertar2 = "INSERT into atributo (nombre) VALUES ('$txtnombreatributo')";
$resultado_natributo = mysql_query($insertar2) 
or die("Error en la inserción de los datos");*/


$insertar = "INSERT into feligres(pNombre,sNombre,pApellido,sApellido,Genero,
telefonoMovil,telefonoCasa,direccion,cargo,estado)
VALUES('$txtPrimer_nombre','$txtSegundo_nombre','$txtPrimer_apellido','$txtSegundo_apellido
','$cmbGenero','$txtTel_Movil','$txtTel_casa','$txtDireccion','$cmbCargo','$cmbEstado')";
$resultado = mysql_query($insertar) or die("Error en la inserción de los datos");
/*$insertar3= "INSERT into ministerio (nombre)  VALUES('$cbBienvenida')";
$resultado2 = mysql_query($con, $insertar2) or die("Error en la inserción de los datos");
$resultado3 = mysql_query($con, $insertar3) or die("Error en la inserción de los datos");*/
mysql_close($conexion);
echo "datos insertados correctamente";

?>
