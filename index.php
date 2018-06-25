<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4 Partie 4 PHP</title>
  </head>
  <body>
    <p>
      <?php
        $fNumber = 255;
        $sNumber = 120;
        function whichIsBigger($fNumber, $sNumber)
        {
          if ($fNumber > $sNumber) {
            $result = 'Le premier nombre est plus grand';
          } elseif ($fNumber < $sNumber) {
            $result = 'Le premier nombre est plus petit';
          } else {
            $result = 'Les deux nombres sont identiques';
          }
          return $result;
        }
        echo whichIsBigger($fNumber, $sNumber);
      ?>
    </p>
  </body>
</html>
