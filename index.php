<?php
  $firstVar = 100;
  $secondVar = 5;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <?php
      while ($firstVar >= 10) {
        $result = $firstVar * $secondVar;
        echo ' | ' . $result;
        $firstVar--;
      }
     ?>
  </body>
</html>
