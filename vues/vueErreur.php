<html>
<head>
	<title>
	Artiklator Erreur
	</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/styleErreur.css">
</head>
<body>
	<div align="center" id="main">
		<h1> hmm, c'est embarassant ...</h1>
		<h2>
			<?php if(isset($dErreur["titre"])) {
					echo $dErreur["titre"];
					}  else {
						echo "Erreur non détectée";
					}
			?>
		</h2>
		<h3>
		<?php if(isset($dErreur["message"])) {
					echo $dErreur["message"];
					}  else {
						echo "Veuillez contacter le webmaster: Clement.TORTI@etu.uca.fr";
					}
		?>
		</h3>

		<a href="index.php"> revenir à la page d'accueil </a></br>
		<a href="index.php?action=afficherAccueil"> revenir en page admin </a> 
	</div>
	
</body>
</html>
