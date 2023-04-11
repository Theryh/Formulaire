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

if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp']; 

    $requete = $bdd->prepare("SELECT * FROM individu WHERE nom = ? OR mail = ?");
    $requete->execute(array($login, $login));
    $resultat = $requete->fetch(PDO::FETCH_ASSOC);


    if ($resultat && password_verify($mdp, $resultat['mdp'])) {
        header("Location: merci2.php"); 
        exit();
    } else {
        echo "Identifiants invalides.";
    }
}
?>


?>
<script src="formjs.js"></script>