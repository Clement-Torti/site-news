<html>
	<head>
		<meta charset="utf-8"/>
		<title>Artiklator</title>
		<link rel="stylesheet" href="css/styleAccueil.css">
	</head>
	
	<body>

		<header>
			<h1>Artiklator</h1>
		</header>


		<aside>
			<b>Trier par:</b><br>
			<div id="ensTrie">
				<a href="index.php?">date</a><br>
				<a href="index.php?trie=site">site</a>
			</div>
		</aside>

		<form id="form" method="POST" action="index.php?action=connexion">
			<b> Continuer en tant qu'Admin</b></br>
			Login:
			<input id="formElement" type="text" name="login"><br>
			
		
			Mdp:
			<input id="formElement" type="password" name="mdp"><br>
			
			<input id="formElement" type="submit" value="Connexion">
			
			<br>
		</form>
		
		
		<?php
			if (isset($dVue)) {
				echo "<div id='ensVues'>";
					foreach($dVue as $news) {
						$website = $news->getWebsite();
						$link = $news->getLink();
						$title = $news->getTitle();
						$content = $news->getContent();
						$date = $news->getDate();

						echo "<div id='vue'>
								<h3 id='website'>$website</h3><br>
								<h3>$title</h3><br>
								$content
								<p id='date'>$date<p>
								Voir l'article complet: <a href='$link' target='_blank'>Cliquez ici</a></div>";
					}
				echo "</div>";

			}

		?>


		<footer>
			Site de news par lecture de flux RSS réalisé par Florent et Clément
			2A-G7 de l'université informatique Clermont-Auvergne 2018
		</footer>
	</body>
</html>
