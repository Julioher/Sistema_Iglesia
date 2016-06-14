function insertarDatos(){   //inicio de la función insertarDatos
		obtenerValoresObjetos();
		//accion = "insertar";
		if(n == ''){//inicio de if
			alert("insertar dato");
			$("#txtnombreministerio").focus();
		}//fin de if
		else{//inicio de else

			//enviarDatos();
			limpiarObjetos();
			$.ajax({url:"../php/funciones_ministerio.php",cache:false,type:"POST",data:{codigo:c, nom:n, accion:'insertar'},success:function(result){
			$("#mostrar").html(result);
			limpiarObjetos();
			}});
		}//fin de else
	} //fin de la función insertarDatos


function modificarDatos(){   //inicio de la función modificarDatos
		obtenerValoresObjetos();
		if(n == ''){//inicio de if
			alert("insertar dato");
			$("#txtnombreministerio").focus();
		}//fin de if
		else{//inicio de else

			//enviarDatos();
			//limpiarObjetos();
			$.ajax({url:"../php/funciones_ministerio.php",cache:false,type:"POST",data:{codigo:c, nom:n, accion:'modificar'},success:function(result){
			$("#mostrar").html(result);
			limpiarObjetos();
			}});
		}//fin de else
	} //fin de la función modificarDatos


function eliminarDatos(){   //inicio de la función eliminarDatos
		obtenerValoresObjetos();
		if(c == ''){//inicio de if
			alert("Digite el codigo");
			$("#txtnombreministerio").focus();
		}//fin de if
		else{//inicio de else

			//enviarDatos();
			//limpiarObjetos();
			$.ajax({url:"../php/funciones_ministerio.php",cache:false,type:"POST",data:{codigo:c,nom:n, accion:'eliminar'},success:function(result){
			$("#mostrar").html(result);
			limpiarObjetos();
			}});
		}//fin de else
	}//fin de la función eliminarDatos



	function obtenerValoresObjetos(){
		c = $("#txtidministerio").val();
		n = $("#txtnombreministerio").val();
	}


	function limpiarObjetos(){
		$("#txtidministerio").val("");
		$("#txtnombreministerio").val("");
		$("#txtnombreministerio").focus();
	}
