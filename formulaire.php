

<!DOCTYPE html>
<?php session_start() ?>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>tuto</title>
  <link rel="stylesheet" media="all" type="text/css" href="css/form.css">
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
            <h1>Inscription</h1>
        <form method="post" action="index.php" onsubmit="return validateForm()">
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
            <label>Crée votre Mot de Passe</label>
            <input type="password" id="mdp" name="mdp" placeholder="Mot de passe">
            <label>Confirmer Mot de Passe</label>
            <input type="password" id="mdp2" name="mdp" placeholder="Mot de passe">
            <br><br>
            <button type="submit">Envoyer</button><br><br>
        </form>
        <center><p>Vous êtes déjà inscrit ? <a href= "formulaireconn.php">Connecter vous ici.</a></p></center>
        
            <script src="js/formjs.js"></script>
        </body>


</html>






