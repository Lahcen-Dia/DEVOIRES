/*
OUSAYD Lahcen
AIT OUALI Es-saadia
*/
<?php 
echo"<h1>Validation de la date</h1>";
$date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{   
   
            
              $jour = $_POST["jour"];
              $mois = $_POST["mois"];
              $annee = $_POST["annee"];
              //$date=date_parse_from_format("d/m/Y", $date);
              //$date = date_parse($date);
              if(!(checkdate($mois, $jour, $annee))){
               echo "la date saisie ";
               echo $_POST["jour"];
               echo"/";
               echo $_POST["mois"];
               echo"/";
               echo $_POST["annee"];
               echo "<br>";
               echo"invalide  date";

               } else {
                 echo "la date saisie ";
               echo $_POST["jour"];
               echo"/";
               echo $_POST["mois"];
               echo"/";
               echo $_POST["annee"];
               echo "<br>";
                echo "date saisie est valide";
            } 
    
function estBissextile($annee) {
 return ((($annee & 3) == 0) && (($annee % 100 != 0) || ($annee % 400 == 0)));
}

if(!estBissextile($annee) && $jour == 29 && $mois == 2){
  echo " <BR>$annee n'est pas bissextile<BR>";;
}
}
?>   
