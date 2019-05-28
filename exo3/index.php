<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3 partie 1 PHP</title>
    <style media="screen">
.div {
  background-color: blue;
  font-weight: 400;
  border: 3px solid black;
  margin: 20px;
  padding: 20px;
  text-align: center;
  border-radius: 200px;
}
    </style>
  </head>
  <body>
<div class="div">
<?PHP
$km = 1;
echo "Nombre de kilometres parcourues : " . $km . "<br> ";
$km = 3;
echo "Nombre de kilometres parcourues : " . $km . "<br> ";
$km = 125;
echo "Nombre de kilometres parcourues : " . $km;

 ?>
</div>
  </body>
</html>
