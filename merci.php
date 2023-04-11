<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Merci</title>
  <link rel="stylesheet" media="all" type="text/css" href="form.css">
</head>

<center>


    <h1>MERCI !</h1>


</center>

<?php 

$dbname = "form";
$dbpass = "";
$dbuser = "root";
$dbip = "localhost";
$bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass );

if (isset($_POST['nom'])) {
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $mail = $_REQUEST['mail'];
    $mdp = $_REQUEST['mdp'];

    $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

    $listage = $bdd->prepare("INSERT INTO individu (`nom`, `prenom`, `mail`, `mdp`) VALUES (?, ?, ?, ?)");
    $listage->execute(array($nom, $prenom, $mail, $mdpHash));
}


?>
<script src="formjs.js"></script>