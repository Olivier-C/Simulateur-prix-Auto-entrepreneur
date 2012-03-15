<!doctype html> 

<head>
<title> Calculer les prix </title>
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
</head>
<body>

<?php
{
$prix = $_POST['prix'];
$taxe = $_POST['taxe'];
$prixTTC = (($prix * 20.3) / 100) + $prix; // début du calcul
echo 'Prix total ttc = '. $prixTTC .'<br>Prix arrondis = '; // résultat
echo ceil ($prixTTC);
}

?>
</body>