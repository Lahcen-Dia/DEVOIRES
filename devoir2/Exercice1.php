/*
OUSAYD Lahcen
AIT OUALI Es-saadia
*/

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
     //Es-saadia AIT OUALI
  function couper_chaine($string,$car){ 
    try {
       
      $retour = array();  
      $tok = strtok($string, $car); 
      while (strlen(join($car, $retour)) != strlen($string)) { 
      array_push($retour, $tok); 
      $tok = strtok($car); 
      } 
      return $retour; 
      } 
      catch (Exception $e) {
       exit;
     }
    }
$phrase="c'est/une/fonction/qui/sert/à/découper/une/chaine/de/caractère/et/la/mettre/dans/un/tableau";
$car='/'; 
 $out = couper_chaine($phrase,$car); 
 print_r ( $out );
    
?>
</body>
</html>
