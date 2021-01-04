<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'classes/utilisateur.class.php';
   $pierre = new Utilisateur();
   $mathilde = new Utilisateur();

  $pierre->setNom('pierre');
  $pierre-> setPasse('azert');

  $mathilde->setNom('math');
  $mathilde->setPasse('12345');

  echo $pierre->getNom(). '<br>';
  echo $mathilde->getNom(). '<br>';
    ?>
    <p>un paragraphe</p>
</body>
</html>