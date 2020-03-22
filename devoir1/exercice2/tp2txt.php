/*
OUSAYD Lahcen
AIT OUALI Es_saadia
*/
<!DOCTYPE html>
<html>
<head>
	<title>Commandes</title>
</head>
<body>
<?php

          echo "<BR/> <BR/>" ;

          $Ordres_de_Commandes = file ("commande.txt") ;

          $Nombre_de_Commandes = count ($Ordres_de_Commandes) ;

          if ($Nombre_de_Commandes == 0)

      {

          echo " Il n'y a pas de commandes en attente. Veuillez revenir plus tard. " ;

      }

          for ($i = 0; $i < $Nombre_de_Commandes ; $i ++)

      {

          echo $Ordres_de_Commandes [$i]  ;
          echo"<br>";

      }

    ?>
</body>
</html>
