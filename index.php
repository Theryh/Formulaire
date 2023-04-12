<html>
    <head>
        <title>SecuriteSI</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" media="all" type="text/css" href="css/index.css">
        <meta name="robots" content="index,nofollow" />
        <meta name="description" content="Sécuriser les systèmes">
        <title>Securiter des systèmes</title>
    </head>

    <body>
        <nav>
          <h1>La sécurité numérique</h1>
          <div class="onglets">
          <nav>
    <h1>La sécurité numérique</h1>
    <div class="onglets">
        <?php 
            if(isset($_SESSION['con'])){
                if($_SESSION['con'] == "connecter"){
                    echo "<a class='w' href='deconnection.php'>Déconnexion</a>";
                } else {
                    echo "<a class='w' href='connection.php'>Connexion</a>";
                }
            } else {
                echo "<a class='w' href='connection.php'>Connexion</a>";
            }
        ?>
        <a href="index.php">Accueil</a>
        <a href="https://www.gouvernement.fr/risques/conseils-aux-usagers">Gouvernement</a>
        <a href="https://twitter.com/?lang=fr">Twitter</a>
    </div>
</nav>
            <a href="index.php">Accueil</a>
            <a href="https://www.gouvernement.fr/risques/conseils-aux-usagers">Gouvernement</a>
            <a href="https://twitter.com/?lang=fr">Twitter</a>
          </div>
        </nav>

    <h2>➤ La sécurité des systèmes d'information</h1>

        <section class="articles">
    
            <div class="article">
             <div class="left">
               <img src="images/sensibilisation-a-la-securite-informatique.png" alt="Affiche de securité d'information" title="Securité information" rel=”nofollow” >
             </div>
             <div class="right">
               <p class="date"><i>Pour commencer,</i></p>
               <h1>C'est quoi ?</h1>
               <p class="description">La sécurité des systèmes d’information (SSI) ou plus simplement sécurité informatique, 
                 est l’ensemble des moyens techniques, organisationnels, juridiques et humains nécessaires 
                 à la mise en place de moyens visant à empêcher l'utilisation non autorisée, le mauvais usage, 
                 la modification ou le détournement du système d'information. 
                 Assurer la sécurité du système d'information est une activité du management du système d'information.
             </div>
           </div> 

           <div class="article">
             <div class="left">
               <img src="images/iStock-1135287390.jpg" alt="Affiche de securité d'information" title="Securité information" rel=”nofollow” >
             </div>
             <div class="right">
               <p class="date"><i>Maintenant,</i></p>
               <h1>Où sommes nous ?</h1>
               <p class="description"> Aujourd’hui, la sécurité est un enjeu majeur pour les entreprises ainsi que pour l’ensemble des acteurs qui l’entourent. 
    Elle n'est plus confinée uniquement au rôle de l’informaticien. 
    Sa finalité sur le long terme est de maintenir la confiance des utilisateurs et des clients. 
    La finalité sur le moyen terme est la cohérence de l’ensemble du système d’information. 
    Sur le court terme, l’objectif est que chacun ait accès aux informations dont il a besoin.
             </div>
           </div> 

           <div class="article">
             <div class="left">
               <img src="images/illu_1201_9abe4126a2.png" alt="Affiche de securité d'information" title="Securité information" rel=”nofollow” >
             </div>
             <div class="right">
               <p class="date"><i>les conséquences,</i></p>
               <h1>De la mauvaise utilisation.</h1>
               <p class="description"> Les conséquences d'une mauvaise sécurisation peuvent concerner les organisations, mais aussi la vie privée d'une ou plusieurs personnes, notamment par la diffusion d'informations confidentielles comme leurs coordonnées bancaires, leurs situations patrimoniales, leurs codes confidentiels, etc. De manière générale, la préservation des données relatives aux personnes fait l'objet d'obligations légales régies par la Loi Informatique et Libertés.
             </div>
           </div> 
          <center><table border="2" cellpadding="10" cellspacing="10">
  
            <caption>Les languages de programmation les plus populaire</caption>
            
          <col style="width:200px">
          
          <tr> <th>Langage de programmation</th> <th>&nbsp;Nom&nbsp;</th> <th>&nbsp;Utilisation en pourcentage&nbsp;</th> </tr>
          
          <tr> <td><center><img src="images/Python-logo-notext.svg.png" width="30px90px"></center></td> <td>Python</td><td>25,95 %</td> </tr>
          
          <tr> <td><center><img src="images/Java_Logo.svg.png" width="30px90px"></center></td> <td>Java</td><td>21,78 %</td> </tr>
          
          <tr> <td><center><img src="images/JavaScript-Logo.png" width="60x90px"></center></td> <td>JavaScript</td> <td>8,26 %</td> </tr>
          
          <tr> <td><center><img src="images/Logo_C_sharp.svg.png" width="30x90px"></center></td> <td>C Sharp</td> <td>7,62 %</td> </tr>

          <tr> <td><center><img src="images/PHP-logo.svg.png" width="30x90px"></center></td> <td>PHP</td> <td>7,37 %</td> </tr>

          <tr> <td><center><img src="images/ISO_C++_Logo.svg.png" width="30x90px"></center></td> <td>C++</td> <td>6,31 %</td> </tr>

          <tr> <td><center><img src="images/R_logo.svg.png" width="30x90px"></center></td> <td>R</td> <td>4,04 %</td> </tr>
          </table>
          *basé sur une analyse de la fréquence de recherches Google des tutoriels de langage de programmation. </center>
        </section>



    </body>

          <footer>
    </footer>
</html>



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