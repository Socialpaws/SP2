<!DOCTYPE html>
<html lang="es">
<head>
	<script>
		function validarn(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
     if (tecla==9) return true; // 3
     if (tecla==11) return true; // 3
    patron = /[A-Za-zñÑ'áéíóúÁÉÍÓÚàèìòùÀÈÌÒÙâêîôûÂÊÎÔÛÑñäëïöüÄËÏÖÜ\s\t]/; // 4
 
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}
	</script>
	<title>Social Paws</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Css/Diseno-Login.css">
	<link rel="stylesheet" type="text/css" href="Css/Diseno-General.css">
	<link rel="stylesheet" type="text/css" href="Css/Diseno-Tabla-Login.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="Css/alert-vacio.js"></script> 
    <script src="sweetalert-master/dist/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
	
	<script>
        $(document).ready(function (){
            $("#BtnIniciarSesion").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#Div-Iniciar-Sesion").offset().top
                    }, 1500);
                //});
            });
        });
    </script>
    <script>
        $(document).ready(function (){
            $("#BtnMS").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#Header2").offset().top
                    }, 1500);
                //});
            });
        });
    </script>
     <script>
        $(document).ready(function (){
            $("#BtnMS2").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#Div-Iniciar-Sesion").offset().top
                    }, 1500);
                //});
            });
        });
    </script>
    <script>
        $(document).ready(function (){
            $("#BtnMS3").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#Header2").offset().top
                    }, 1500);
                //});
            });
        });
    </script>
    <script>
        $(document).ready(function (){
            $("#BtnDP").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#Header3").offset().top
                    }, 1500);
                //});
            });
        });
    </script>
    <script>
        $(document).ready(function (){
            $("#BtnHM").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#Header").offset().top
                    }, 1500);
                //});
            });
        });
    </script>
     <script>
    var main = function(){	
    	$("#Nombre1").focus(function(){
    		var usu = $("#Correo").val();

    		$.ajax({
    			url:"ver.php",
    			method : "POST",
    			data:{usuario:usu},
    			success: function(data){
    				if(data==1){
    					 $("#Correo").css("border", "1px solid red");
    						swal({title: "Error",   text:"El usuario ya existe",
					        imageUrl: "Imagenes/Alerts/Help2.png",
					        confirmButtonText: "Ok"});
    				}else{
    					 $("#Correo").css("border", "1px solid green");
    				}
    				console.log(data);
    			}
    		})
    	});
    	
};
		$(document).ready(main);
    </script>
    <script>
			/*function ValidaForm(){
			    var usuario = document.getElementById("user").value;
			    var contrasena = document.getElementById("contra").value;

			    if (usuario == "" || contrasena == "")
			        {
			            Vacio();
			            return;
			        }
			    document.getElementById("form2").submit();
			}*/
			function ValidaForm2(){
			    var Correo = document.getElementById("Correo").value;
			    var Nom = document.getElementById("Nombre1").value;
			    var Ape = document.getElementById("Apellido1").value;
			    var Dia = document.getElementById("Dia").value;
			    var Mes = document.getElementById("Mes").value;
			    var Anio = document.getElementById("Anio").value;
			    var Correos = document.getElementById("Correos").value;
			    var Contras = document.getElementById("Contra1").value;
			    var Contras2 = document.getElementById("Contra2").value;

			    if (Correo == "" || Nom == "" || Ape == "" || Dia == "" || Mes == "" || Anio == "" || Correos == "" || Contras == "" || Contras2 == "" )
			        {
			            Vacio3();
			            return;
			        }
			    document.getElementById("form3").submit();
}
</script>

	<script>
		$(document).on('ready',function(){
			var pet = $('#form2').attr('action');
			var met = $('#form2').attr('method');

			$('#ll').on('click',function(e){
				e.preventDefault();

				$.ajax({
					beforeSend: function(){
					$("#icono").show();
					$('#icono').html("<br><img src='Imagenes/Panda.gif' alt='Smiley face'  height='50' width='50'>");
					},
					url:pet,
					type: met,
					data:$('#form2').serialize(),
					success: function(resp){
						
						if (resp==1) {

							$('#icono').html('Admin');
							window.location='PHP/Empleados/Admin/Muro2.php';
							
						}

						if(resp==2){

							window.location="PHP/Usuarios/Usuario/Muro2.php";
						}

						if(resp==3){
							window.location="PHP/Empleados/Veterinario/Muro2.php";
						}
						if(resp==4){
							window.location="PHP/Empleados/Empleado/Muro2.php";
						}
						if(resp==0){
						$('#icono').hide();
						swal({title: "Error",   text:"La contraseña o el usuario es incorrecto",
				        imageUrl: "Imagenes/Alerts/Help2.png",
				        confirmButtonText: "Ok"});
						}
						if (resp==5){
							$('#icono').hide();
							Vacio3();
							return;
						}
						
					},

				});
			});
		});
	</script>

	<script>
		$(document).on('ready',function(){
			
			$('#mm').on('click',function(e){
				e.preventDefault();
				var pet = $('#form3').attr('action');
			var met = $('#form3').attr('method');
			var contra= $("#Contra1").val();
				 if(contra.length < 5){
				 	swal({title: "Error",   text: "El minimo de caracteres para la contraseña es de 5",
				        imageUrl: "Imagenes/Alerts/Help2.png",
				        confirmButtonText: "Ok"});	
				 } else{
				$.ajax({
					beforeSend: function(){
					$("#gar").show();
					$('#gar').html("<br><img src='Imagenes/Panda.gif' alt='Smiley face'  height='50' width='50'>");
					},
					url:pet,
					type: met,
					data:$('#form3').serialize(),
					success: function(resp){
						if(resp==0){
							$('#gar').hide();
							Vacio3();
							return;
						}
						if(resp==2){
						$('#gar').hide(100);
						swal({title: "Error",   text: "Las contraseñas son diferentes",
				        imageUrl: "Imagenes/Alerts/Help2.png",
				        confirmButtonText: "Ok"});
						}
						if(resp==4){
						$('#gar').hide(100);
						swal({title: "Error",   text: "El usuario ya existe",
				        imageUrl: "Imagenes/Alerts/Help2.png",
				        confirmButtonText: "Ok"});		
						}
						if(resp==5){
						$('#gar').hide(100);
						swal({title: "Error",   text: "El e-mail ya esta en uso",
				        imageUrl: "Imagenes/Alerts/Help2.png",
				        confirmButtonText: "Ok"});		
						}
						if(resp==7){
						$('#gar').hide(100);
						swal({title: "Éxito",   text: "Ahora eres un usuario",
				        imageUrl: "Imagenes/Alerts/Check.png",
				        confirmButtonText: "Ok"});	
						}
						console.log(resp);
					},
				});
			}
			});
		});
	</script>
</head>
<body>
	<div id="Header">
		<div class="row center">
			<div class="col-md-7 ">
				<p id="Titulo-Home">Social Paws</p>
				<p id="Subtitulo-Home">El mejor sitio para tus mascotas</p>
				<a href="Index_EN.php" id="Subtitulo-Home"><span class="icon-globe"></span>English</a>
			</div>
			<div class="col-md-4 col-md-offset-1">
				<center><img src="Imagenes/Logo1.png" id="Imagenes-Logo"></center>
			</div>
		</div>
		<center>
			<a href="#" id="BtnIniciarSesion"> <span class="icon-arrow-with-circle-down"></span></a>
		</center>
	</div>
	<div id="Div-Iniciar-Sesion" >
		<div class="row" align="center" id="Div-Ini">
				<div class="col-md-4 col-md-offset-1" >
					<div id="login-form">
						<h1>Iniciar sesión</h1>
				        <fieldset>
				        	<form action="Login2_EN.php" method="GET" id="form2">
				            	<input type="email" name="user" id="user" placeholder="Usuario"> 
				                <input type="password" name="contra" id="contra" placeholder="Contraseña"> 
				                <input type="button" name="Iniciar" value="Iniciar" id='ll'>
				                <div id='icono'></div>
				            </form>
				        </fieldset>
				    </div>
				</div>	
				<div class="col-md-4 col-md-offset-1" >
					<div id="login-form">
						<h1>Registrarse</h1>
				        <fieldset>
				        	<form action="PHP/Usuarios/Usuario/Registrate.php" method="GET" id="form3">
				            <input type="text" class="Nombre" id="Correo" placeholder="Usuario" maxlength="30" name="Correo">
				            @socialpaws.com
							<input type="text" class="Nombre" id="Nombre1" placeholder="Nombre 1" maxlength="20" name="Nom1" onkeypress="return validarn(event)">
							<input type="text" class="Nombre" id="Nombre2" placeholder="Nombre 2" maxlength="20" name="Nom2" onkeypress="return validarn(event)">
							<input type="text" class="Apellido" id="Apellido1" placeholder="Apellido 1" maxlength="20" name="Ape1" onkeypress="return validarn(event)">
							<input type="text" class="Apellido" id="Apellido2" placeholder="Apellido 2" maxlength="20" name="Ape2" onkeypress="return validarn(event)">
							<select name="gene" id="Combo" >
								<option value="Femenino">Femenino</option>
								<option value="Masculino">Masculino</option>
								<option value="Otros">Otros</option>
							</select>
							<input type="number" class="Te" id="Dia" placeholder="Día" min="1" max="31" name="Dia">
							<input type="number" class="Te" id="Mes" placeholder="Mes" min="1" max="12" name="Mes">
							<input type="number" class="Te" id="Anio" placeholder="Año" min="1940" max="2016" maxlength="4" name="Anio">
							<input type="text" class="Te" id="Correos" placeholder="Correo electronico" maxlength="30" name="Correos">
							<input type="password" class="Te" id="Contra1" placeholder="Establecer contraseña"  maxlength="15" name="Contra1">
							<input type="password" class="Te" id="Contra2" placeholder="Confirmar contraseña" maxlength="15" name="Contra2">
				                <input type="button" name="Iniciar" value="Registrarme" id='mm'>
				                <div id='gar'></div>

				            </form>
				        </fieldset>
				    </div>
				</div>	
		</div>
		<center>
			<a href="#" id="BtnMS"> <span class="icon-arrow-with-circle-down"></span></a>
			<a href="#" id="BtnHM"><span class="icon-arrow-with-circle-up"></span></a>
		</center>
	</div>
	<div id="Header2">
		<center><p id="Titulo-SM">Visión y Misión</p></center>
		<div class="row center">
			<div class="col-md-6">
				<p id="Sub-titulo-Home"> Visión</p>
				<p id="Subtitulo-Home"> Ser un sitio web para una comunidad de 
					amantes de mascotas que permita cuidar y mejorar el estado
					 de los animales.</p>
				<img src="Imagenes/Perro1.png" id="Img-SM1">
			</div>
			<div class="col-md-6">
				<p id="Sub-titulo-Home"> Misión</p>
				<p id="Subtitulo-Home"> Somos un grupo de personas que busca
				 el beneficio de los animales mediante una sitio web.</p>
				 <img src="Imagenes/Perro2.png" id="Img-SM2">
			</div>
			</div>
			<center>
			<a href="#" id="BtnDP"> <span class="icon-arrow-with-circle-down"></span></a>
			<a href="#" id="BtnMS2"><span class="icon-arrow-with-circle-up"></span></a>
		</center>
	</div>
	<div id="Header3">
		<center><p id="Titulo-SM">Desarrolladores</p></center>
		<div class="row center">
			<div class="col-md-4">
				<p id="Sub-titulo-DP">Erick Leonés</p>
				<img src="Imagenes/Erick.png" id="Img-SM1">
			</div>
			<div class="col-md-4">
				<p id="Sub-titulo-DP"> José Argueta</p>
				 <img src="Imagenes/Andres.png" id="Img-SM2">
			</div>
			<div class="col-md-4">
				<p id="Sub-titulo-DP"> Kevin Fuentes</p>
				 <img src="Imagenes/Kevin.png" id="Img-SM3">
			</div>
			</div>
			<center>
				<a href="#" id="BtnMS3"><span class="icon-arrow-with-circle-up"></span></a>
			</center>
		</div>


	


</body>
</html>