<html>
	<head>
		<meta charset="utf-8"/>
		<title>Connection requise</title>
		<link rel="stylesheet" href="css/styleConnection.css">
	</head>
	<body>

		<div align="center" id="main">
			<h1> Se Connecter </h1>

			<h4> Vous devez fournir des informations correctes pour continuer </h4>

			<form method="POST" action="index.php?action=connexion">
				Login:<br>
				<input type="text" name="login"><br>
				Mdp:<br>
				<input type="password" name="mdp"><br>
				<input type="submit" value="Connexion"><br>
			</form>
	
			<a href="index.php"> revenir à la page d'accueil </a>
		</div>

	</body>
</html>
