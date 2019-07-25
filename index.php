<?php
$message = 'Salut à toi travail beaucoup et tu seras le meilleur.';?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<title>Exercice 9 PHP</title>
	</head>
	<body>
	<h1>Créer une variable. Afficher cette variable en majuscules.</h1>
	<p><span style="color:blue">variable $message : </span> <?= $message ?></p>
	<p><span style="color:blue">variable $message en majuscule : </span>' <?= strtoupper($message) ?></p>
	<p>Le serveur installé sur ce poste est en anlais, c' est pourquoi le "à" ne se met pas en majuscule.<p>
	<p>normalement, il aurait fallu utiliser la fonction  "mb_strtoupper($message,'UTF-8')", pour un affichage corect.</p>
	<!--echo '<p><span style="color:blue">variable $message en majuscule : </span>' . mb_strtoupper($message,'UTF-8'). '</p>';-->
	</body>
</html>
