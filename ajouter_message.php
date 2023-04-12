
<?php

$dbname = "form";
$dbpass = "";
$dbuser = "root";
$dbip = "localhost";
$bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass );

if (isset($_POST['idAuteur'])) {
    $Auteur = $_REQUEST['idAuteur'];
    $Texte = $_REQUEST['Texte'];

    $listage = $bdd->prepare("INSERT INTO blog (`idAuteur`, `Texte`) VALUES (?, ?)");
    $listage->execute(array($Auteur, $Texte));
}



?>