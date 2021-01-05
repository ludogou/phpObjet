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

    $pierre = new Admin('pierre', 'azerty');
    $mathide = new Utilisateur('mathilde', '12345');

    echo '<p> Bonjour ' . $pierre->getNom2() . '</p>';
    echo '<p> Bonjour ' . $pierre->getNom() . '</p>';
    echo '<p> Bonjour ' . $mathide->getNom() . '</p>';

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