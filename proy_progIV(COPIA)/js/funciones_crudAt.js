function insertarDatos(){   //inicio de la función insertarDatos
		obtenerValoresObjetos();
		//accion = "insertar";
		if(n == ''){//inicio de if
			alert("insertar dato");
			$("#txtnombreatributo").focus();
		}//fin de if
		else{//inicio de else

			//enviarDatos();
			limpiarObjetos();
			$.ajax({url:"../php/funciones_atributo.php",cache:false,type:"POST",data:{codigo:c, nom:n, accion:'insertar'},success:function(result){
			$("#mostrar").html(result);
			limpiarObjetos();
			}});
		}//fin de else
	} //fin de la función insertarDatos


	function modificarDatos(){   //inicio de la función modificarDatos
		obtenerValoresObjetos();
		if(n == ''){//inicio de if
			alert("insertar dato");
			$("#txtnombreatributo").focus();
		}//fin de if
		else{//inicio de else

			//enviarDatos();
			//limpiarObjetos();
			$.ajax({url:"../php/funciones_atributo.php",cache:false,type:"POST",data:{codigo:c, nom:n, accion:'modificar'},success:function(result){
			$("#mostrar").html(result);
			limpiarObjetos();
			}});
		}//fin de else
	} //fin de la función modificarDatos


	function eliminarDatos(){   //inicio de la función eliminarDatos
		obtenerValoresObjetos();
		if(c == ''){//inicio de if
			alert("Digite el codigo");
			$("#txtnombreatributo").focus();
		}//fin de if
		else{//inicio de else

			//enviarDatos();
			//limpiarObjetos();
			$.ajax({url:"../php/funciones_atributo.php",cache:false,type:"POST",data:{codigo:c,nom:n, accion:'eliminar'},success:function(result){
			$("#mostrar").html(result);
			limpiarObjetos();
			}});
		}//fin de else
	}//fin de la función eliminarDatos


function buscarDatos(){   //inicio de la función buscarDatos
		obtenerValoresObjetos();
		if(c == ''){//inicio de if
			alert("Digite el codigo");
			$("#txtnombreatributo").focus();
		}//fin de if
		else{//inicio de else

			//enviarDatos();
			//limpiarObjetos();
			$.ajax({url:"../php/funciones_atributo.php",cache:false,type:"POST",data:{codigo:c,nom:n, accion:'buscar'},success:function(result){
			$("#mostrar").html(result);
			limpiarObjetos();
			}});
		}//fin de else
	}//fin de la función buscarDatos
	
	function obtenerValoresObjetos(){
		c = $("#txtidatributo").val();
		n = $("#txtnombreatributo").val();
	}


	function limpiarObjetos(){
		$("#txtidatributo").val("");
		$("#txtnombreatributo").val("");
		$("#txtnombreatributo").focus();
	}

	/*function eliminar(){

		if(n == '#txtnombreatributo'){

		limpiarObjetos();
	}

	}*/

	/*function mostrarDatos(){
		alert(accion)
		$.ajax({url:"../php/funciones_atributo.php",cache:false,type:"POST",data:{nom:n, accion:accion},success:function(result){
			$("#mostrar").html(result);
			limpiarObjetos();
			}});
	}*/