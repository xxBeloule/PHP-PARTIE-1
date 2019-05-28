<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice 6 partie 1 PHP</title>
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
  p {
    color: black;
  }
  </style>
</head>
<body>
  <div class="div">

  <p>Créer une variable name et l'initialiser avec la valeur de votre choix.
Afficher : "Bonjour" + name + ", comment vas tu ?".</p>
    <?php
    $name = "Belal";
    echo "Bonjour " . $name . ", comment-vas-tu?"
    ?>
  </div>
</body>
</html>
