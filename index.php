<?php 
require 'action.php'
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Formulaire Cook Angels</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h1>Cook Angels</h1>

			<?php 
				if ($mail_sent) {
			?>
				<div class="alert alert-success">
			  		<strong>Merci !</strong> Votre réponse a été prise en compte.
				</div>
			<?php
				}
				
				if ($mail_error) {
			?>
				<div class="alert alert-danger">
			  		<strong>Erreur !</strong> Un problème est survenu...
				</div>
			<?php
				}
			?>

			<?php 
				if (!$mail_sent) {
			?>
				<h5>Bonne nouvelle ! Cook Angels cherche dès maintenant de nouvelles contrées à explorer ! Aidez-nous à choisir le prochain pays qui profitera des bons petits plats de Cook Angels en remplissant ce formulaire. </h5>

				<form action="" method="POST">

					<!-- First Name -->
					<div class="form-group">
		    	        <label for="firstname">Votre prénom *</label>
		    	        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom">
		    	        <span class="text-danger"><?= $firstname_error ?></span>
		    	    </div>

		    	    <!-- Last Name -->
					<div class="form-group">
		    	        <label for="lastname">Votre nom *</label>
		    	        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom">
		    	        <span class="text-danger"><?= $lastname_error ?></span>
		    	    </div>

					<!-- City -->
					<div class="form-group">
		    	        <label for="city">Votre ville de résidence *</label>
		    	        <input type="text" class="form-control" id="city" name="city" placeholder="Ville de résidence">
		    	        <span class="text-danger"><?= $city_error ?></span>
		    	    </div>
					
					<!-- Email -->
		    	    <div class="form-group">
		    	        <label for="">Votre Email *</label>
		    	        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
		    	        <span class="text-danger"><?= $email_error ?></span>
		    	    </div>

					<!-- Country -->
					<div class="form-group">
						<label>Choisissez le pays que vous préférez parmi les suivants *</label>
						<div class="radio">
		  					<label><input type="radio" name="countries">Angleterre</label>
						</div>
						<div class="radio">
		  					<label><input type="radio" name="countries">Espagne</label>
						</div>
						<div class="radio">
		  					<label><input type="radio" name="countries">Allemagne</label>
						</div>
						<div class="radio">
		  					<label><input type="radio" name="countries">Italie</label>
						</div>
						<div class="radio">
		  					<label><input type="radio" name="countries">Suisse</label>
						</div>
						<div class="radio">
		  					<label><input type="radio" name="countries">Bahamas</label>
						</div>
						<span class="text-danger"><?= $countries_error ?></span>
					</div>
					
					<!-- Age -->
					<div class="form-group">
						<label>Choisissez votre tranche d'âge</label>
						<div class="radio">
		  					<label><input type="radio" name="age">-20 ans</label>
						</div>
						<div class="radio">
		  					<label><input type="radio" name="age">21-35 ans</label>
						</div>
						<div class="radio">
		  					<label><input type="radio" name="age">+35 ans</label>
						</div>
					</div>
		    	  
		    	    <button type="submit" class="btn btn-primary">Valider</button>
		    	</form>
		    <?php
				}
			?>
	    </div>

		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyD_I8QEEDkLthbatQ7zz7EnXJI9ko95Qoc"></script>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>
