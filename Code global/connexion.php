<!DOCTYPE html>
<html>

<head>
	<title>Page de connexion</title>
	<link rel="stylesheet" type="text/css" href="connexion.css">
</head>

<body>

	<header>
		<div id="logo"><img src="logorond.png" style="width:10%"></div>
		<h1>Bienvenue sur le site Connect'Home !</h1>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<section>
		<article><br>
			<div id="phrase">Veuillez vous connecter pour continuer</div>
            <form method="post" action="connexiontraitement.php"> 
			<label>Nom d'utilisateur:</label><br>
			<img src="user.png" style="width: 15px">
			<input type="text" name="ID"><br><br>
			<label>Mot de passe:</label><br>
			<img id="cadenas" src="cadenas.png" style="width: 15px">
			<input type="password" name="MDP"><br><br>
			<input type="button" name="Connexion" value="Connexion">
        </form><br>

			
		</article>
		<center><aside>
			<p><strong>Vous n'êtes pas encore inscrits ?</strong><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
			</p>
		</aside></center><br>
	</section>

	<footer>
		<p><center>Adresse : 28, rue Notre-Dame-des-Champs, 75006, Paris / Téléphone :  01 49 54 52 00 / Mail : domisep@gmail.com</center></p>
	</footer>

</body>

</html>


