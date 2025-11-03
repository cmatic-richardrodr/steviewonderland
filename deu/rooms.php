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
if ($so <> 'movil') {
	echo "<br><br><br>";
}

$room = $_GET['room'];

if ($room == '') {

	?>

    	<section class="ftco-section bg-light ftco-room">

    		<div class="container">

      			<div class="row justify-content-center mb-5 pb-3">

          			<div class="col-md-12 heading-section text-center ftco-animate">

          				<span class="subheading">Stevie Wonder Land<br>Boutique Inn</span>
            				<h2 class="mb-4">Unsere Zimmer:</h2>
					<font size=4>
					Wir verfügen über neun (9) wunderschöne Zimmer und Suiten, jedes in einem anderen Stil, in denen Sie sich wie ein VIP fühlen werden ... insbesondere wenn Sie unser exquisites Frühstück genießen.
					</font>
					<?php include 'rooms_list.php'; ?>

          			</div>

        		</div>  

		</div>

	</section>

	<?php

}else{

	include 'detecta_so.php';

	if ($so == 'movil') {
		$fuente = 300;
	}else{
		$fuente = 600;
	}

	switch ($room) {

		case 'amor';
			$room_nombre = "Ehezimmer " . strtoupper($room);
			break;
		case 'arte':
			$room_nombre = "Ehezimmer " . strtoupper($room);
			break;
		case 'bavaria':
			$room_nombre = "Superior-Suite " . strtoupper($room);
			break;
		case 'blue':
			$room_nombre = "Luxuszimmer " . strtoupper($room);
			break;
		case 'camarote':
			$room_nombre = "Doppelzimmer " . strtoupper($room);
			break;
		case 'caribe':
			$room_nombre = "Superior-Suite " . strtoupper($room);
			break;
		case 'espana':
			$room_nombre = "Familiensuite ESPAÑA";
			break;
		case 'memoria':
			$room_nombre = "Ehezimmer " . strtoupper($room);
			break;
		case 'oriental':
			$room_nombre = "Superior-Suite " . strtoupper($room);
			break;

	}

	?>

    	<section class="ftco-section bg-light ftco-room">

    		<div class="container">

      			<div class="row justify-content-center mb-5 pb-3">

          			<div class="col-md-12 heading-section text-center ftco-animate">

          				<span class="subheading">Stevie Wonder Land<br>Boutique Inn</span>
            				<h2 class="mb-4"><?php echo $room_nombre; ?></h2>
					<button onclick='AbrirContactos();'>Buchung</button><br><br>

					<?php

					switch ($room) {

						case "amor":
							?>
							<br><a href="https://www.youtube.com/watch?v=Qk936WXA1tY" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
							<img src='../images/icono_video.png' width=50 title='Virtueller Besuch in der Wohnung'>
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
							<img src='../images/icono_video.png' width=50 title='Virtueller Besuch in der Wohnung'>
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
							<img src='../images/icono_video.png' width=50 title='Virtueller Besuch in der Wohnung'>
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
							<img src='../images/icono_video.png' width=50 title='Virtueller Besuch in der Wohnung'>
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
							<img src='../images/icono_video.png' width=50 title='Virtueller Besuch in der Wohnung'>
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
							<img src='../images/icono_video.png' width=50 title='Virtueller Besuch in der Wohnung'>
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
							<img src='../images/icono_video.png' width=50 title='Virtueller Besuch in der Wohnung'>
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
							<img src='../images/icono_video.png' width=50 title='Virtueller Besuch in der Wohnung'>
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
							<img src='../images/icono_video.png' width=50 title='Virtueller Besuch in der Wohnung'>
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

					<br><br><button onclick='AbrirContactos();'>Buchung</button>

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