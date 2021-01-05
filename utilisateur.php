<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action='' method='post'>
        <label for='nom'>Nom d'utilisateur : </label>
        <input type="text" name="nom" id="nom"><br>
        <label for='pass'>Choississez votre mot de passe : </label>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit" value="envoyer">
    </form> -->
    <?php
    require 'classes/Utilisateur1.class.php';
    require 'classes/admin.class.php';

    //  if(isset($_POST['nom'],$_POST['pass'])){
    // $pierre = new Utilisateur($_POST['nom'], $_POST['pass']);

    $pierre = new Admin('pierre', 'azerty','Sud');
    $mathide = new Utilisateur('mathilde', '12345','Sud');
    $pat = new Utilisateur('pat', '12345','Nord');

  
   $pierre->setPrixAbo();
   $mathide->setPrixAbo();
   $pat->setPrixAbo();

   $u='Utilisateur';
   echo 'Valeur de ABONNEMENT dans Utilisateur : '. $u::ABONNEMENT . '<br>';
   echo 'Valeur de ABONNEMENT dans admin : '. Admin::ABONNEMENT . '<br>';

   echo"Prix de l'abonnement pour ";
    $pierre->getNom();
    echo' :';
    $pierre->getPrixAbo() ;
    echo'<br>';

    echo"Prix de l'abonnement pour ";
    $mathide->getNom();
    echo' : ';
    $mathide->getPrixAbo();
    echo'<br>';

    echo"Prix de l'abonnement pour ";
    $pat->getNom();
    echo' : ';
    $pat->getPrixAbo();
    echo'<br>';

    $pierre->setBan('Paul');
    $pierre->setBan('Jean');
    echo $pierre->getBan();

    /*}else {
     echo "<p> erreur</p>";
 }*/
    ?>
    <p>un paragraphe</p>
</body>

</html>