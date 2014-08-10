$( document ).ready(function() {
    if(sessionStorage.getItem("session-sfl")){
        location.href='http://localhost/sfl-aspirantes/perfil-admin.php';
    }
});

	$('#login').click(function(){

        email= $('#email').val();
        pass= $('#passw').val();

		$.ajax({
        url: "http://localhost/SFL-Admin/index.php/api/users/login",
        data: {
            email : mail,
            pass : pass
        },
        type: "POST",
        dataType: "json",
        success: function(source) {
            if (source.success === true) {
            	console.log(source.usuario);

                $.each(source.usuario, function(index, usuario) {
                        sessionStorage.setItem("id-sfl", usuario.id_cuenta);
                        sessionStorage.setItem("session-sfl", usuario.session);
                });


                location.href='http://localhost/sfl-aspirantes/perfil-admin.php';
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

