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


	            	$('#tel_particular').val(usuario.tel_particular);
            		$('#tel_movil').val(usuario.tel_movil);
            		$('#tel_oficina').val(usuario.tel_oficina);
            		$('#tel_rec').val(usuario.tel_rec);
            		$('#twitter').val(usuario.twitter);
		            $('#facebook').val(usuario.facebook);
		            $('#linkedin').val(usuario.linkedin);
		            $('#rfc').val(usuario.rfc);
		           	$('#curp').val(usuario.curp);
		            $('#no_imss').val(usuario.no_imss);
		            $('#no_clinica').val(usuario.no_clinica);


                });

            	estados_inicial(id_estado);
            	delegaciones_inicial(id_estado, id_del_mun);
            	zona_inical(zona);
            	cat_ref_persona_inicial();
            	exp_inicial();

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





	function exp_inicial(){
		$.ajax({
	        url: "http://localhost/SFL-Admin/index.php/api/users/perf_exp",
	        data: {
	        	id : sessionStorage.getItem("id-sfl"),
            	session : sessionStorage.getItem("session-sfl")
	        },
	        type: "POST",
	        dataType: "json",
	        success: function(source) {
	            if (source.success === true) {
	            	console.log(source.exp);

	            $.each(source.exp, function(index, exp) {
	            	$("#lug_nac").val(exp.lug_nac);
		            $("#genero").val(exp.genero);
		            $("#edo_civil").val(exp.edo_civil);
		            RadionButtonSelectedValueSet('auto_prop', (exp.auto_prop).toUpperCase());
		            RadionButtonSelectedValueSet('auto_esta', (exp.auto_esta).toUpperCase());
		            RadionButtonSelectedValueSet('mane_carre', (exp.mane_carre).toUpperCase());
		            RadionButtonSelectedValueSet('dispo_viaj', (exp.dispo_viaj).toUpperCase());
		            RadionButtonSelectedValueSet('dispo_res', (exp.dispo_res).toUpperCase());

		          
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


	 function RadionButtonSelectedValueSet(name, SelectdValue) {
    $('input[name="' + name+ '"][value="' + SelectdValue + '"]').prop('checked', true);
}

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



	 /**/
	function cat_ref_persona_inicial(){
		$('#table_referencia').empty();
		$('#table_referencia').append('<tr><td class="" valign="middle">Nombre</td><td class="" valign="middle">telefono</td><td class="" valign="middle" align="center"></td></tr> ');
		$.ajax({
	        url: "http://localhost/SFL-Admin/index.php/api/users/cat_ref_persona",
	        data: {
	        	id : sessionStorage.getItem("id-sfl"),
            	session : sessionStorage.getItem("session-sfl")
	        },
	        type: "POST",
	        dataType: "json",
	        success: function(source) {
	            if (source.success === true) {
	            	console.log(source.referencia);


	            	$.each(source.referencia, function(index, referencia) {

	            		$('#table_referencia').append('<tr><td class="">'+referencia.ref_nom+'</td>'+
			                  '<td class="">'+referencia.ref_tel+'</td>'+
			                  '<td class="" align="center"><button data-toggle="modal" data-target="#myModal2" onclick="view_referencia(\''+referencia.id_ref+'\')" >Editar</button></td></tr>');

	            			// console.log(estado.id_estado);
	            		// if (id_del_mun === delegacion.id_del_mun){
		            	// 	$('#id_del_mun').append("<option selected='selected' value='"+delegacion.id_del_mun+"'>"+delegacion.del_mun+"</option> ");
		            	// }else{
		            	// 	$('#id_del_mun').append("<option value='"+delegacion.id_del_mun+"'>"+delegacion.del_mun+"</option> ");
		            	// }

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
function cat_ref_persona_inicial2(){
		$('#table_referencia').empty();
		$('#table_referencia').append('<tr><td class="" valign="middle">Nombre</td><td class="" valign="middle">telefono</td><td class="" valign="middle" align="center"></td></tr> ');
		$.ajax({
	        url: "http://localhost/SFL-Admin/index.php/api/users/cat_ref_persona",
	        data: {
	        	id : sessionStorage.getItem("id-sfl"),
            	session : sessionStorage.getItem("session-sfl")
	        },
	        type: "POST",
	        dataType: "json",
	        success: function(source) {
	            if (source.success === true) {
	            	console.log(source.referencia);


	            	$.each(source.referencia, function(index, referencia) {

	            		$('#table_referencia').append('<tr><td class="">'+referencia.ref_nom+'</td>'+
			                  '<td class="">'+referencia.ref_tel+'</td>'+
			                  '<td class="" align="center"><button data-toggle="modal" data-target="#myModal2" onclick="view_referencia(\''+referencia.id_ref+'\')" >Editar</button></td></tr>');

	            			// console.log(estado.id_estado);
	            		// if (id_del_mun === delegacion.id_del_mun){
		            	// 	$('#id_del_mun').append("<option selected='selected' value='"+delegacion.id_del_mun+"'>"+delegacion.del_mun+"</option> ");
		            	// }else{
		            	// 	$('#id_del_mun').append("<option value='"+delegacion.id_del_mun+"'>"+delegacion.del_mun+"</option> ");
		            	// }

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



$('#up_refu').click(function(){
	
		$.ajax({
        url: "http://localhost/SFL-Admin/index.php/api/users/u_cat_ref_persona",
        data: {
        	id : sessionStorage.getItem("id-sfl"),
        	id_ref : $("#id_refu").val(),
		  	ref_nom: $("#ref_nomu").val(),
		  	ref_tel: $("#ref_telu").val(),
		  	ref_ocu : $("#ref_ocuu").val(),
		  	time_con : $("#time_conu").val(),
            session : sessionStorage.getItem("session-sfl")
        },
        type: "POST",
        dataType: "json",
        success: function(source) {
            if (source.success === true) {
            	cat_ref_persona_inicial2();
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


function view_referencia(id){
	

	
	
	$.ajax({
	        url: "http://localhost/SFL-Admin/index.php/api/users/view_cat_ref_persona",
	        data: {
	        	id : sessionStorage.getItem("id-sfl"),
	        	id_ref : id,
            	session : sessionStorage.getItem("session-sfl")
	        },
	        type: "POST",
	        dataType: "json",
	        success: function(source) {
	            if (source.success === true) {
	            	console.log(source.referencia);


	            	$.each(source.referencia, function(index, referencia) {
	            		$("#ref_nomu").val(referencia.ref_nom);
	            		$("#ref_telu").val(referencia.ref_tel);
	            		$("#ref_ocuu").val(referencia.ref_ocu);
	            		$("#time_conu").val(referencia.time_con);
	            		$("#id_refu").val(id);
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
	cat_aspirante()
});

$('#up2').click(function(){
	cat_aspirante()
});

$('#up3').click(function(){
	cat_aspirante()
});

$('#up5').click(function(){
	up_exp();
	


});


$('#add_ref').click(function(){
	
		$.ajax({
        url: "http://localhost/SFL-Admin/index.php/api/users/i_cat_ref_persona",
        data: {
        	id : sessionStorage.getItem("id-sfl"),
        	ref_nom : $("#ref_nom").val(),
		  	ref_tel: $("#ref_tel").val(),
		  	ref_ocu: $("#ref_ocu").val(),
		  	time_con : $("#time_con").val(),
            session : sessionStorage.getItem("session-sfl")
        },
        type: "POST",
        dataType: "json",
        success: function(source) {
            if (source.success === true) {
            	$('#table_referencia').append("<tr><td class=''>"+$("#ref_nom").val()+"</td>"+
			                  "<td class=''>"+$("#ref_tel").val()+"</td>"+
			                  "<td class='' align='center'><a href='' data-toggle='modal' data-target='myModal'><i class='fa fa-edit'></i></a></td></tr>");

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

function up_exp(){


		$.ajax({
        url: "http://localhost/SFL-Admin/index.php/api/users/u_perf_exp",
        data: {
        	id : sessionStorage.getItem("id-sfl"),
        	lug_nac : $("#lug_nac").val(),
		  	genero:  $("#genero").val(),
		  	edo_civil:  $("#edo_civil").val(),
		  	auto_prop: $("input[name='auto_prop']:checked").val(),
		  	auto_esta :$("input[name='auto_esta']:checked").val(),
		  	mane_carre : $("input[name='mane_carre']:checked").val(),
		  	dispo_viaj : $("input[name='dispo_viaj']:checked").val(),
		  	dispo_res : $("input[name='dispo_res']:checked").val(),
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
}




function cat_aspirante(){

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
			tel_particular : $('#tel_particular').val(),
            tel_movil : $('#tel_movil').val(),
            tel_oficina : $('#tel_oficina').val(),
            tel_rec : $('#tel_rec').val(),
            twitter : $('#twitter').val(),
		    facebook : $('#facebook').val(),
		    linkedin : $('#linkedin').val(),
		    rfc : $('#rfc').val(),
		    curp : $('#curp').val(),
		    no_imss : $('#no_imss').val(),
		    no_clinica : $('#no_clinica').val(),
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
}








