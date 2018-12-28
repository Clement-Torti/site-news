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
		
		<!-- Récupération dans un tableau des champs du formulaire pour pouvoir les retourner à la page Admin -->
		<?php
			$params=['action' => 'afficherAccueil',
					'name' => $_REQUEST["name"],
					'url' => $_REQUEST["url"]
					];
		?>
		
		
		<div id="lien"> <!-- division utile pour permettre les margin côté CSS -->
			<a id="lien" href="index.php"> Revenir à la page d'accueil </a></br></br>
			
			<!-- Permet de garder en mémoire les champs du formulaire lors d'un retour sur la page Admin -->
			<!-- Permet de passer des variables en GET -->
			<a id="lien" href=<?php echo 'index.php?'.http_build_query($params); ?>> Revenir en page admin </a> 
			<!-- id sur les liens utile pour permettre le text-decoration:none côté CSS -->
		</div>
	</body>
</html>
