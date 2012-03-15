<!doctype html> 
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title> Simulateur prix Auto-entrepreneur </title>
	<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div id="container">
		<div class="bandeau">
		</div>
		<form method="post" action="simulateur_prix.php">
			<label><h1>Prix</h1></label></br>
			<input class="input" type="text" id="prix" name="prix" /></br>
			<h3>+</h3>
			<input type="hidden" id="taxe" name="taxe" value="20.3" /></br>
			<label><h1>Taxe de 20.3 %</h1></label></br>
			<input class="input1" type="submit" name="envoyer" value="Calculer" />
		</form>

		<h2><?php
if($_POST['prix'] && $_POST['taxe'])
{
$prix = $_POST['prix'];
$taxe = $_POST['taxe'];
$prixTTC = (($prix * 20.3) / 100) + $prix; // début du calcul
echo 'Prix total ttc = '. number_format($prixTTC, 2, ',', ' ').' €' .'<br>Prix arrondis = '; // résultat
echo number_format(ceil($prixTTC), 2, ',', ' ').' €';
}

?>
		</h2>

	</div>

</body>
</html>