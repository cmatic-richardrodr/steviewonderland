<!DOCTYPE html>
<html lang="es">

<head>

	<?php include 'encabezado.php'; ?>

	<script>

		function AbrirContactos() {

			window.location='index.php#contacto';

		}

	</script>

</head>

<body>

<font size=4>

<?php
include '../dimensiones.php';

$room = $_GET['room'];

if ($room == '') {

	?>

    	<section class="ftco-section bg-light ftco-room">

    		<div class="container">

      			<div class="row justify-content-center mb-5 pb-3">

          			<div class="col-md-12 heading-section text-center ftco-animate">

         				<span class="subheading">Stevie Wonder Land<br>Posada Boutique</span>
            				<h2 class="mb-4">Nuestras Habitaciones:</h2>
					<font size=4>
					Contamos con 9 bellas habitaciones y suites, cada una en un estilo diferente donde se sentirán VIP... especialmente disfrutando nuestros exquisitos desayunos.
					</font>
					<?php include 'rooms_list.php'; ?>

          			</div>

        		</div>  

		</div>

	</section>

	<?php

}else{

	switch ($room) {

		case 'amor';
			$room_nombre = "Habitación Matrimonial " . strtoupper($room);
			break;
		case 'arte':
			$room_nombre = "Habitación Matrimonial " . strtoupper($room);
			break;
		case 'bavaria':
			$room_nombre = "Suite Superior " . strtoupper($room);
			break;
		case 'blue':
			$room_nombre = "Habitación Deluxe " . strtoupper($room);
			break;
		case 'camarote':
			$room_nombre = "Habitación Doble Matrimonial " . strtoupper($room);
			break;
		case 'caribe':
			$room_nombre = "Suite Superior " . strtoupper($room);
			break;
		case 'espana':
			$room_nombre = "Suite Familiar ESPAÑA";
			break;
		case 'memoria':
			$room_nombre = "Habitación Matrimonial " . strtoupper($room);
			break;
		case 'oriental':
			$room_nombre = "Suite Superior " . strtoupper($room);
			break;

	}

	?>

    	<section class="ftco-section bg-light ftco-room">

    		<div class="container">

      			<div class="row justify-content-center mb-5 pb-3">

          			<div class="col-md-12 heading-section text-center ftco-animate">

          				<span class="subheading">Stevie Wonder Land<br>Posada Boutique</span>
            				<h2 class="mb-4"><?php echo $room_nombre; ?></h2>
					<button onclick='AbrirContactos();'>Reservar</button><br><br>

					<?php

					switch ($room) {

						case "amor":
							?>
							<br><a href="https://www.youtube.com/watch?v=Qk936WXA1tY" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<img src='../images/icono_video.png' width=50 title='Visita virtual a la habitación'>
							</a><br>
							<?php
							include 'rooms_services.php';
							?><br><img src='../images/room-amor.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-amor-2.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-amor-3.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-amor-4.jpg' width='<?php echo $fuente; ?>'><br><?php
							break;
						case "arte":
							?>
							<br><a href="https://www.youtube.com/watch?v=BC1N57jj_TM" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<img src='../images/icono_video.png' width=50 title='Visita virtual a la habitación'>
							</a><br>
							<?php
							include 'rooms_services.php';
							?><br><img src='../images/room-arte.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-arte-2.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-arte-3.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-arte-4.jpg' width='<?php echo $fuente; ?>'><br><?php
							break;
						case "bavaria":
							?>
							<br><a href="https://www.youtube.com/watch?v=EGytcNodtB0" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<img src='../images/icono_video.png' width=50 title='Visita virtual a la habitación'>
							</a><br>
							<?php
							include 'rooms_services.php';
							?><br><img src='../images/room-bavaria.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-bavaria-2.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-bavaria-3.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-bavaria-4.jpg' width='<?php echo $fuente; ?>'><br><?php
							break;
						case "blue":
							?>
							<br><a href="https://www.youtube.com/watch?v=U_XdlMrPQm8" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<img src='../images/icono_video.png' width=50 title='Visita virtual a la habitación'>
							</a><br>
							<?php
							include 'rooms_services.php';
							?><br><img src='../images/room-blue.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-blue-2.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-blue-3.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-blue-4.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-blue-5.jpg' width='<?php echo $fuente; ?>'><br><?php
							break;
						case "camarote":
							?>
							<br><a href="https://www.youtube.com/watch?v=pDhyaf8ywK4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<img src='../images/icono_video.png' width=50 title='Visita virtual a la habitación'>
							</a><br>
							<?php
							include 'rooms_services.php';
							?><br><img src='../images/room-camarote.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-camarote-2.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-camarote-3.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-camarote-4.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-camarote-5.jpg' width='<?php echo $fuente; ?>'><br><?php
							break;
						case "caribe":
							?>
							<br><a href="https://www.youtube.com/watch?v=gCxXLMIXeE4" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<img src='../images/icono_video.png' width=50 title='Visita virtual a la habitación'>
							</a><br>
							<?php
							include 'rooms_services.php';
							?><br><img src='../images/room-caribe.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-caribe-2.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-caribe-3.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-caribe-4.jpg' width='<?php echo $fuente; ?>'><br><?php
							break;
						case "espana":
							?>
							<br><a href="https://www.youtube.com/watch?v=xwGWsym7LRc" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<img src='../images/icono_video.png' width=50 title='Visita virtual a la habitación'>
							</a><br>
							<?php
							include 'rooms_services.php';
							?><br><img src='../images/room-espana.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-espana-2.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-espana-3.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-espana-4.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-espana-5.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-espana-6.jpg' width='<?php echo $fuente; ?>'><br><?php
							break;
						case "memoria":
							?>
							<br><a href="https://www.youtube.com/watch?v=wXdoFbKjmtg" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<img src='../images/icono_video.png' width=50 title='Visita virtual a la habitación'>
							</a><br>
							<?php
							include 'rooms_services.php';
							?><br><img src='../images/room-memoria.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-memoria-2.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-memoria-3.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-memoria-4.jpg' width='<?php echo $fuente; ?>'><br><?php
							break;
						case "oriental":
							?>
							<br><a href="https://www.youtube.com/watch?v=QOP76iVeN6A" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<img src='../images/icono_video.png' width=50 title='Visita virtual a la habitación'>
							</a><br>
							<?php
							include 'rooms_services.php';
							?><br><img src='../images/room-oriental.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-oriental-2.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-oriental-3.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-oriental-4.jpg' width='<?php echo $fuente; ?>'><br><?php
							?><br><img src='../images/room-oriental-5.jpg' width='<?php echo $fuente; ?>'><br><?php
							break;

					}

					?>

					<br><br><button onclick='AbrirContactos();'>Reservar</button>

          			</div>

        		</div>  

		</div>

	</section>

	<?php


}

?>

<?php include 'pie_pagina.php'; $room = ''; ?>

</font>

</body>

</html>