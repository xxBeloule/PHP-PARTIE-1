<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exercice 7 partie 1 PHP</title>
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
    <p>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
      Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".</p>
      <?php
      $lastname = "Siddique";
      $firstname = "Belal";
      $age = 20;
      echo "Bonjour " . $lastname . " " . $firstname . " , tu as " . $age . " ans." ;
      ?>
    </div>
  </body>
  </html>
