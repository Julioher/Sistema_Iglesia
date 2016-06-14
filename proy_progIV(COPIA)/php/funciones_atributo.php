

<?php
/*include("../php/conexion.php");
echo "datos enviados correctamente";
//variables que van a la tabla atributo
/*$txtnombreatributo = $_POST['txtnombreatributo'];
$txtidatributo = $_POST['txtidatributo'];
 	/*Esta es la condición para guardar registros en el campo "nombre"
 	de la tabla "atributo". */
	/*if($_POST['btnGuardar']){ //inicio del if padre
		if($txtnombreatributo == ''){//inicio de la condición hija
				echo "<script>alert('en blanco')</script>";
			}
			else{
				$insertar = mysql_query("INSERT into atributo (nombre) 
					VALUES ('$txtnombreatributo')");
			} //fin de la condición hija
	}//fin del if padre

	/*Esta es la condición para modificar registros en el campo "nombre"
 	de la tabla "atributo". */
	/*if($_POST['btnModificar']){
		$modificar = mysql_query("UPDATE atributo set nombre='$txtnombreatributo' 
			where idAtributo='$txtidatributo'");
	}
	
	/*Esta es la condición para eliminar registros 
 	de la tabla "atributo". */
	/*if($_POST['btnEliminar']){
		$eliminar = mysql_query("DELETE from atributo where idAtributo = '$txtidatributo'");
	}
	/*Esta es la condición para buscar registros 
 	de la tabla "atributo". */
	/*if($_POST['btnBuscar']){
		$buscar = mysql_query("SELECT * from atributo");
		echo "<table border='1'><tr><th>Id</th><th>Nombre</th></tr>";
		while ($reg = mysql_fetch_array($buscar)){
			$n=$n+1;
			echo "<tr><td style=' text-align: left;'>".$reg['0']."</td><td style=' text-align: left;'>".$reg['1']."</td></tr>";											
		}
		echo "</table>";
		*/
		//}Hº
?>

<?php
	include("../php/conexion.php");
	$txtnombreatributo = $_POST['nom'];
	$txtidatributo = $_POST['codigo'];
	$accion = $_POST['accion'];

	
	switch ($accion){			
		// Coneste codigo buscamos registro
		case "insertar":{
			$insertar = mysql_query("INSERT into atributo (nombre) VALUES ('$txtnombreatributo')");
			//fin de la condición hija
			if($insertar){
			echo "datos insertados correctamente";
		}
	}
	break;


	case "modificar":{
			$modificar = mysql_query("UPDATE atributo set nombre='$txtnombreatributo' 
			where idAtributo='$txtidatributo'");
			if($modificar){
			echo "Datos modificados correctamente";
		}
			
	}
	break;

	case "eliminar":{
		$eliminar = mysql_query("DELETE from atributo where idAtributo='$txtidatributo'");
		if($eliminar){
			echo "Datos eliminados correctamente";
		}

	}
	break;

	case "buscar":{
		$buscar = mysql_query("SELECT *  from atributo where idAtributo='$txtidatributo'");
		if($buscar){
			echo "<table style='border:1px solid #ffd180; width:516px; border-radius:5px;'><tr><th style='border:1px solid #ffd180'>Id</th><th style='border:1px solid #ffd180'>Nombre</th></tr>";
			$n=1;
		while ($reg = mysql_fetch_array($buscar)){
			
			echo "<tr><td style='text-align: center; border:1px solid #ffd180'>".$reg['0']."</td><td style=' text-align: center;border:1px solid #ffd180'>".$reg['1']."</td></tr>";											
			$n++;
		}
		echo "</table>";
		}

	}
	break;
}
	//$eliminar = mysql_query("DELETE from atributo where nombre='$txtnombreatributo'");
	//$modificar = mysql_query("UPDATE atributo nombre='$txtnombreatributo' where id='$txtidatributo');
?>