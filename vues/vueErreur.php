<html>
	<head>
		<meta charset="utf-8"/>
		<title>Erreur</title>
		<link rel="stylesheet" href="css/styleErreur.css">
	</head>
	<body>
		<h1> Hmm, c'est embarassant ...</h1>
		<h2>
			<?= $dErreur["titre"] ?>
		</h2>
		<h3>
		<?= $dErreur["message"] ?>
		</h3>
		
		<?php
			if(isset($_REQUEST['name']) && isset($_REQUEST['url']))
			{
				$name=$_REQUEST['name'];
				$url=$_REQUEST['url'];
			}
		?>
		
		
		<div id="lien"> <!-- division utile pour permettre les margin côté CSS -->
			<a id="lien" href="index.php"> Revenir à la page d'accueil </a></br></br>
			<a id="lien" href="index.php?action=afficherAccueil"> Revenir en page admin </a> 
			<!-- id sur les liens utile pour permettre le text-decoration:none côté CSS -->
		</div>
	</body>
</html>
