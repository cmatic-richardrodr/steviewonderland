<!DOCTYPE html>
<html lang="es">

<head>

	<?php 

	include 'encabezado.php'; 

	?>

</head>

<body>

	<font size=4>

	<?php
	include '../dimensiones.php';
	?>

    	<section class="ftco-section bg-light ftco-room">

    		<div class="container">

      			<div class="row justify-content-center mb-5 pb-3">

         			<div class="col-md-12 heading-section text-center ftco-animate">

	          			<span class="subheading">Stevie Wonder Land<br>Posada Boutique</span>
        	   			<h2 class="mb-4">Formulario de Contacto y Reservaciones:</h2>

         			</div>

         			<div class="col-md-12 heading-section text-center ftco-animate">

           				<form action="sended.php?idioma=<?php echo $idioma; ?>" class="bg-white p-5 contact-form" method="post">

              					<div class="form-group">
                					<input id="names" name="names" type="text" class="form-control" placeholder="Nombres" required />
              					</div>
              					<div class="form-group">
                					<input id="email" name="email" type="email" class="form-control" placeholder="Correo electrónico" required />
              					</div>
              					<div class="form-group">
        	        				<input id="telefonos" name="telefonos" type="text" class="form-control" placeholder="Teléfonos">
	             				</div>
              					<div class="form-group">
                					<input id="asunto" name="asunto" type="text" class="form-control" placeholder="Asunto" required />
              					</div>
              					<div class="form-group">
                					<textarea id="mensaje" name="mensaje" textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje" required /></textarea>
              					</div>
              					<div class="form-group">
							<?php include '../captcha.php'; ?>
							<img id="aceptar_off" src='../images/boton_send_esp.png' title='Verifique que es humano para enviar el mensaje'>
                					<input id="boton_s" name="boton_s" type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-5" hidden />
              					</div>

            				</form>

          			</div>

         			<div class="col-md-12 heading-section text-center ftco-animate">

	          			<span class="subheading">Stevie Wonder Land<br>Posada Boutique</span>
        	   			<h2 class="mb-4">¿Cómo llegar?</h2>

         			</div>

         		</div>

      			<div class="row justify-content-center mb-5 pb-3">

         			<div class="col-md-12 heading-section text-center ftco-animate">

					<a href='../images/mapa-2.jpg' target="_blank"><img src='../images/mapa-2-mini.jpg' width='<?php echo $fuente; ?>'></a><br>
					<font size=4>Ferry Punta de Piedras <> Stevie Wonder Land</font>

         			</div>

         		</div>

      			<div class="row justify-content-center mb-5 pb-3">

         			<div class="col-md-12 heading-section text-center ftco-animate">

					<a href='../images/mapa-3.jpg' target="_blank"><img src='../images/mapa-3-mini.jpg' width='<?php echo $fuente; ?>'></a><br>
					<font size=4>Aeropuerto <> Stevie Wonder Land</font>

         			</div>

      			</div>

      			<div class="row justify-content-center mb-5 pb-3">

         			<div class="col-md-12 heading-section text-center ftco-animate">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.8183973133705!2d-63.96441852574294!3d10.901402156877701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c31f535e5555555%3A0xa66e3b3e9fa2b790!2sStevie%20Wonderland%20Hotel-boutique!5e0!3m2!1ses!2sve!4v1692074191966!5m2!1ses!2sve" height="300" width='<?php echo $fuente1; ?>' style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

         			</div>

        		</div> 

		</div>

	<?php 

	include 'pie_pagina.php'; 

	?>

</body>

</html>