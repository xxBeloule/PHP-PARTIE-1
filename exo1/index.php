<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Titre</title>
    <style media="screen">
      .Div {
        background-color: blue;
        border-radius: 2px;
        border: 2px solid black;
        width: 200px;
        height: 300px;
        position: absolute;
        margin-left: 650px;
      }
      p {
        text-align: center;
        color:red;
        font-size: 20px;
        font-style: oblique;
      }
    </style>
  </head>
  <body>

    <div class="Div">
    <p> <?PHP
      $name = "Belal";

    echo $name;

       ?></p>
    </div>

  </body>
</html>
