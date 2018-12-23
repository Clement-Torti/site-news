<html>
<head>
	<meta charset="utf-8"/>
		<title>Artiklator</title>
		<link rel="stylesheet" href="css/styleAdmin.css">
	</head>
<body>
	<header>
		<h1>Artiklator (Admin)</h1>
	</header>
	
	<?php
	
		if(isset($_SESSION['role']) && isset($_SESSION['login'])) {

			echo "<aside>Role: ".$_SESSION['role']."<br>Nom d'utilisateur: ".$_SESSION['login']."<br></aside>";
		}
		
		if(isset($sites)) {
			echo "<table id='table'>";
			echo "<tr><th>Index</th> <th>Nom du site</th> <th>URL du flux RSS</th> <td>Action</td></tr>";

			foreach($sites as $site) {
				$id = $site->getId();
				$name = $site->getName();
				$url = $site->getUrl();

				echo "<tr><td>$id</td> <td>$name</td> <td>$url</td>";
				echo "<td>
						<form method='POST' action='index.php?action=supprimerSite&name=".$site->getName()."'>
							<input type='submit' value='Supprimer'/>
						</form> 
					</td>";
				echo "</tr>";
			}

			echo "</table>";
		}
	?>

	<form id="ajouterSite" method="POST" action="index.php?action=ajouterSite">
		<h3>Ajouter un flux RSS</h3>
		Name:
		<input id="formElement" type="text" name="name"/><br>
		Url:
		<input id="formElement" type="text" name="url"/><br>

		<input id="formElement" type="submit" value="Ajouter site"/><br>
	</form>

	<a href="index.php"> Quitter le mode admin </a>


	<footer>
			Site de news par lecture de flux RSS réalisé par Florent et Clément
			2A-G7 de l'université informatique Clermont-Auvergne 2018
	</footer>

</body>
</html>
