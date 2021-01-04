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
   $pierre = new Utilisateur('pierre', 'azert');
   $mathilde = new Utilisateur('mathilde','12345');

  echo $pierre->getNom(). '<br>';
  echo $mathilde->getNom(). '<br>';
    ?>
    <p>un paragraphe</p>
</body>
</html>