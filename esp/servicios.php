<?php

$foto = rand(1,2);

if ($so == 'movil') {

	?>

    	<section class="ftco-section bg-light ftco-room">

    			<div class="row no-gutters justify-content-center mb-5 pb-3">

      				<div class="container">

					<?php

					if ($idioma == 'esp') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">

								<?php include '../video_promocional.php'; ?>
          							<img src='../images/<?php echo $logo; ?>' width='<?php echo $logo_ancho; ?>'><br>
            							<h3 class="mb-4">Altos de El Yaque, Isla de Margarita, Nueva Esparta, Venezuela.</h3>

          						</div>

						<?php

					}else

					if ($idioma == 'eng') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">

								<?php include '../video_promocional.php'; ?>
          							<img src='../images/<?php echo $logo; ?>' width='<?php echo $logo_ancho; ?>'><br>
            							<h3 class="mb-4">Heights of El Yaque, Margarita Island, Nueva Esparta, Venezuela.</h3>

          						</div>

						<?php

					}else

					if ($idioma == 'deu') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">

								<?php include '../video_promocional.php'; ?>
          							<img src='../images/<?php echo $logo; ?>' width='<?php echo $logo_ancho; ?>'><br>
            							<h3 class="mb-4">Höhen von El Yaque, Insel Margarita, Nueva Esparta, Venezuela.</h3>

          						</div>

						<?php

					}

					include '../carrusel.php';

					?>

     				</div>

     				<div class="container">

					<?php

					if ($idioma == 'esp') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">
								<font size=4>
				      				Un exclusivo Hotel-Boutique situado en los Altos del Yaque a tan solo 500 metros de la famosa y popular Playa El Yaque, caminando tranquilamente y 100% seguro entre 3 – 5 minutos.
								</font>
          						</div>
         					</div>

						<?php

					}else

					if ($idioma == 'eng') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">
								<font size=4>
							      	An exclusive Hotel-Boutique located in Altos del Yaque, just 500 meters from the famous and popular Playa El Yaque, walking quietly and 100% safe between 3-5 minutes.
								</font>
          						</div>
         					</div>

						<?php

					}else

					if ($idioma == 'deu') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">
								<font size=4>
								Ein komfortables im Neo-Kolonialstil gebautes Gebaeude, 500 Meter (3-5 Geh-Minuten) von dem weltbekannten Strand und Surf-Ort El Yaque entfernt. Umgeben von einem wunderschoenen tropischen Garten und einem herrlichen Swimmingpool mit grosser Terrasse, wo bequeme Liegestuehle zum Sonnenbaden und Entspannen einladen. Wie auch ein Palmendach mit Haengematten, verschieden Chill-Out Areale mit Sofas und Stuehlen und die Chill-Out Grill Ecke.
								</font>
          						</div>
         					</div>

						<?php

					}

					?>

        			</div>

        		</div>  

	<?php


}else{

	?>

    	<section class="ftco-section bg-light ftco-room">

    			<div class="row no-gutters justify-content-center mb-5 pb-3">

      				<div class="container">

					<?php

					if ($idioma == 'esp') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">

								<?php include '../video_promocional.php'; ?>
          							<img src='../images/<?php echo $logo; ?>' width='<?php echo $logo_ancho; ?>'><br>
            							<h3 class="mb-4">Altos de El Yaque, Isla de Margarita, Nueva Esparta, Venezuela.</h3>

          						</div>

						<?php

					}else

					if ($idioma == 'eng') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">

								<?php include '../video_promocional.php'; ?>
          							<img src='../images/<?php echo $logo; ?>' width='<?php echo $logo_ancho; ?>'><br>
            							<h3 class="mb-4">Heights of El Yaque, Margarita Island, Nueva Esparta, Venezuela.</h3>

          						</div>

						<?php

					}else

					if ($idioma == 'deu') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">

								<?php include '../video_promocional.php'; ?>
          							<img src='../images/<?php echo $logo; ?>' width='<?php echo $logo_ancho; ?>'><br>
            							<h3 class="mb-4">Höhen von El Yaque, Insel Margarita, Nueva Esparta, Venezuela.</h3>

          						</div>

						<?php

					}

					if ($foto < 2) {

						?>

	          				<div class="col-md-12 heading-section text-center ftco-animate">

	              					<a href='../images/bg_1.jpg'  target="_blank"><img src='../images/bg_1-mini.jpg' width=<?php echo $fuente1; ?>></a>

						</div>

						<?php

					}else{

						?>

	          				<div class="col-md-12 heading-section text-center ftco-animate">

	              					<a href='../images/bg_2.jpg'  target="_blank"><img src='../images/bg_2-mini.jpg' width=<?php echo $fuente1; ?>></a><br>

						</div>

						<?php

					}

					?>

     				</div>

     				<div class="container">

					<?php

					if ($idioma == 'esp') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">
								<font size=4>
				      				Un exclusivo Hotel-Boutique situado en los Altos del Yaque a tan solo 500 metros de la famosa y popular Playa El Yaque, caminando tranquilamente y 100% seguro entre 3 – 5 minutos.
								</font>
          						</div>

						<?php

					}else

					if ($idioma == 'eng') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">
								<font size=4>
							      	An exclusive Hotel-Boutique located in Altos del Yaque, just 500 meters from the famous and popular Playa El Yaque, walking quietly and 100% safe between 3-5 minutes.
								</font>
          						</div>

						<?php

					}else

					if ($idioma == 'deu') {

						?>

      						<div class="row justify-content-center mb-5 pb-3">
          						<div class="col-md-12 heading-section text-center ftco-animate">
								<font size=4>
								Ein komfortables im Neo-Kolonialstil gebautes Gebaeude, 500 Meter (3-5 Geh-Minuten) von dem weltbekannten Strand und Surf-Ort El Yaque entfernt. Umgeben von einem wunderschoenen tropischen Garten und einem herrlichen Swimmingpool mit grosser Terrasse, wo bequeme Liegestuehle zum Sonnenbaden und Entspannen einladen. Wie auch ein Palmendach mit Haengematten, verschieden Chill-Out Areale mit Sofas und Stuehlen und die Chill-Out Grill Ecke.
								</font>
          						</div>

						<?php

					}

				?>

        			</div>

        		</div>  

	<?php

}

?>