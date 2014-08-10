$( document ).ready(function() {

	$.ajax({
        url: "http://localhost/SFL-Admin/index.php/api/users/cat_aspirante",
        data: {
        	id : sessionStorage.getItem("id-sfl"),
            session : sessionStorage.getItem("session-sfl")
        },
        type: "POST",
        dataType: "json",
        success: function(source) {
            if (source.success === true) {
            	console.log(source);


            	$.each(source.usuario, function(index, usuario) {

            		$('#paterno').val(usuario.paterno);
	            	$('#materno').val(usuario.materno);
	            	$('#nombre').val(usuario.nombre);
	            	$('#fec_nac').val(usuario.fec_nac);

	            	$('#calle').val(usuario.calle);
	            	$('#colonia').val(usuario.colonia);
	            	$('#num_ext').val(usuario.num_ext);
	            	$('#num_int').val(usuario.num_int);
	            	$('#cp').val(usuario.cp);

	            	id_estado = usuario.id_estado;
	            	id_del_mun = usuario.id_del_mun;
	            	zona = usuario.zona;



                });

            	estados_inicial(id_estado);
            	delegaciones_inicial(id_estado, id_del_mun);
            	zona_inical(zona);

    //         	setTimeout( alert(id_estado), 5000 );
				// $("#id_estado option[value="+id_estado+"]").attr("selected",true); 
				// // $("#id_del_mun option[value="+ valor +"]").attr("selected",true);
				// // $("#id_cat_zonas option[value="+ valor +"]").attr("selected",true);

            	
            } else {
                console.log(source.message);
            }
        },
        error: function(dato) {
            console.log(JSON.stringify(dato));
            console.log("ERROR");
        }
    });


	/*CONSULTA ESTADOS*/
	function estados_inicial(id_estado){
		$.ajax({
	        url: "http://localhost/SFL-Admin/index.php/api/users/estados",
	        data: {
	        },
	        type: "POST",
	        dataType: "json",
	        success: function(source) {
	            if (source.success === true) {
	            	console.log(source.estados);


	            	$.each(source.estados, function(index, estado) {

	            			// console.log(estado.id_estado);
	            		if (id_estado === estado.id_estado){
		            		$('#id_estado').append("<option selected='selected' value='"+estado.id_estado+"'>"+estado.estado+"</option> ");
		            	}else{
		            		$('#id_estado').append("<option value='"+estado.id_estado+"'>"+estado.estado+"</option> ");
		            	}

	                });



	            	
	            } else {
	                console.log(source.message);
	            }
	        },
	        error: function(dato) {
	            console.log(JSON.stringify(dato));
	            console.log("ERROR");
	        }
	    });
	 }



	/*CONSULTA Delegaciones*/
	function delegaciones_inicial(id_estado, id_del_mun){
		$.ajax({
	        url: "http://localhost/SFL-Admin/index.php/api/users/delegaciones",
	        data: {
	        	id_estado : id_estado
	        },
	        type: "POST",
	        dataType: "json",
	        success: function(source) {
	            if (source.success === true) {
	            	console.log(source.delegaciones);


	            	$.each(source.delegaciones, function(index, delegacion) {

	            			// console.log(estado.id_estado);
	            		if (id_del_mun === delegacion.id_del_mun){
		            		$('#id_del_mun').append("<option selected='selected' value='"+delegacion.id_del_mun+"'>"+delegacion.del_mun+"</option> ");
		            	}else{
		            		$('#id_del_mun').append("<option value='"+delegacion.id_del_mun+"'>"+delegacion.del_mun+"</option> ");
		            	}

	                });



	            	
	            } else {
	                console.log(source.message);
	            }
	        },
	        error: function(dato) {
	            console.log(JSON.stringify(dato));
	            console.log("ERROR");
	        }
	    });
	 }



	/*CONSULTA zona*/
	function zona_inical(zona){
		$.ajax({
	        url: "http://localhost/SFL-Admin/index.php/api/users/zona",
	        data: {
	        },
	        type: "POST",
	        dataType: "json",
	        success: function(source) {
	            if (source.success === true) {
	            	console.log(source.zona);


	            	$.each(source.zona, function(index, zona) {

	            			// console.log(estado.id_estado);
	            		if (zona == zona.id_cat_zonas){
		            		$('#id_cat_zonas').append("<option selected='selected'  value='"+zona.id_cat_zonas+"'>"+zona.zonas+"</option> ");
		            	}else{
		            		$('#id_cat_zonas').append("<option value='"+zona.id_cat_zonas+"'>"+zona.zonas+"</option> ");
		            	}

	                });



	            	
	            } else {
	                console.log(source.message);
	            }
	        },
	        error: function(dato) {
	            console.log(JSON.stringify(dato));
	            console.log("ERROR");
	        }
	    });
	 }


});

/*****************************************************************************************************************************************************/

function cambia_del(id_estado){

	/*CONSULTA Delegaciones*/
	$.ajax({
        url: "http://localhost/SFL-Admin/index.php/api/users/delegaciones",
        data: {
        	id_estado : id_estado
        },
        type: "POST",
        dataType: "json",
        success: function(source) {
            if (source.success === true) {
            	console.log(source.delegaciones);


            	$.each(source.delegaciones, function(index, delegacion) {

            			// console.log(estado.id_estado);
            		
	            	$('#id_del_mun').append("<option value='"+delegacion.id_del_mun+"'>"+delegacion.del_mun+"</option> ");

                });



            	
            } else {
                console.log(source.message);
            }
        },
        error: function(dato) {
            console.log(JSON.stringify(dato));
            console.log("ERROR");
        }
    });

}





$( "#id_estado" ).change(function() {
  // alert($("#id_estado").val());
  $('#id_del_mun').empty();
  cambia_del($("#id_estado").val());
});



/*Actualizar seccion 1*/
$('#up1').click(function(){

	paterno = $("#paterno").val();
	materno = $("#materno").val();
	nombre = $("#nombre").val();
	fec_nac = $("#fec_nac").val();


		$.ajax({
        url: "http://localhost/SFL-Admin/index.php/api/users/u_cat_aspirante",
        data: {
        	id : sessionStorage.getItem("id-sfl"),
        	paterno : paterno,
		  	materno: materno,
		  	nombre: nombre,
		  	fec_nac: fec_nac,
		  	calle : $('#calle').val(),
		  	colonia : $('#colonia').val(),
		  	num_ext : $('#num_ext').val(),
		  	num_int : $('#num_int').val(),
		  	cp : $('#cp').val(),
		  	id_estado : $('#id_estado').val(),
		  	id_del_mun : $('#id_del_mun').val(),
		  	zona : $('#id_cat_zonas').val(),
            session : sessionStorage.getItem("session-sfl")
        },
        type: "POST",
        dataType: "json",
        success: function(source) {
            if (source.success === true) {
            	console.log(source);
            	alert("Actualización correcta");

            } else {
                console.log(source.message);
            }
        },
        error: function(dato) {
            console.log(JSON.stringify(dato));
            console.log("ERROR");
        }
    });
});








