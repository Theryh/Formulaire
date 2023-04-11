

<!DOCTYPE html>
<?php session_start() ?>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>tuto</title>
  <link rel="stylesheet" media="all" type="text/css" href="form.css">
</head>

<?php

         $dbname = "form";
         $dbpass = "";
         $dbuser = "root";
         $dbip = "localhost";
         $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass );
        ?>
<body>
    <body>
            <h1>Connexion</h1>
        <form method="post" action="merci2.php" onsubmit="return validateForm()">
            <br>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Logo_de_la_Chambre_de_commerce_et_d%27industrie.svg/1280px-Logo_de_la_Chambre_de_commerce_et_d%27industrie.svg.png" width="200px">
            <br><br>
            <label>Nom :</label>
            <input type="texte" id="nom" name="nom" placeholder="Nom">
            <label>Prénom :</label>
            <input type="texte" id="prenom" name="prenom" placeholder="Prenom">
            <br><br>
            <label>Adresse Mail</label>
            <input type="texte" id="mail" name="mail" placeholder="Mail">
            <br><br>
            <label>Entrer votre Mot de Passe</label>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe">
            <br><br>
            <button type="submit">Envoyer</button><br><br>
        </form>
        <center><p>Vous êtes n'est pas inscrit ?<a href= "formulaire.php">Inscrivez-vous ici. </a></p></center>
        
            <script src="formjsconn.js"></script>
        </body>

        <?php 

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



</html>






