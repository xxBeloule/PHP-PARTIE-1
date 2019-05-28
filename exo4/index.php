<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice 4 PHP partie 1</title>
  <style media="screen">
  .div {
    background-color: blue;
    font-weight: 400;
    border: 3px solid black;
    margin: 20px;
    padding: 20px;
    text-align: center;
    border-radius: 200px;
    color: white;
    font-weight: bolder;
  }
  </style>
</head>
<body>
  <div class="div">
    <?php
    echo "<p>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
    Les afficher.</p>";
    $string = "String";
    $int = 20;
    $float = 2.2;
    $vraioufaux = true;
    echo "Voici les variables : " . $string . " " . $int . " " . $float . " " . $vraioufaux;

    ?>
  </div>
</body>
</html>
