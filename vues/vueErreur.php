<html>
<head>
	<title>
	Erreur
	</title>
</head>
<body>
	<h1> hmm, c'est embarassant ...</h1>
	<h2>
		<?= $dErreur["titre"] ?>
	</h2>
	<h3>
	<?= $dErreur["message"] ?>
	</h3>
	<a href="index.php"> revenir à la page d'accueil </a></br>
	<a href="index.php?action=afficherAccueil"> revenir en page admin </a> 
</body>
</html>
