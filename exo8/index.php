<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>PHP partie 1 exo 8</title>
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
    <p>Créer 3 variables.
      Dans la première mettre le résultat de l'opération 3 + 4.
      Dans la deuxième mettre le résultat de l'opération 5 * 20.
      Dans la troisième mettre le résultat de l'opération 45 / 5.
      Afficher le contenu des variables.</p>
      <?php
      $additon = 3 + 4;
      $multiplication = 5 * 20;
      $division = 45 / 5 ;
      echo $additon . " ". $multiplication ." ". $division;
      ?>
    </div>
  </body>
  </html>
