<!DOCTYPE html>
<html>
<body>
<?php 
	//Es-saadia AIT OUALI
		

  	//Archiver les commandes des client dans les fichiers corespondant.
    $fichier = file("commandes.txt");
   
    $total = count($fichier);

    for($i = 0; $i < $total; $i++) {

         if(substr_count($fichier[$i], 'CLI1001')>0)
           {
            $CLI1001=fopen("psccl01_CLI1001.txt","a+");
            
            // Ecriture
            if (fwrite($CLI1001, $fichier[$i]) === FALSE) 
              {
                echo 'Impossible d\'écrire dans le fichier ';
                exit;
              }
            fclose($CLI1001);
             
              }

if(substr_count($fichier[$i], 'CLI1004')>0)
           {
            $CLI1004=fopen("psccl01_CLI1004.txt","a+");
            
            // Ecriture
            if (fwrite($CLI1004, $fichier[$i]) === FALSE) 
              {
                echo 'Impossible d\'écrire dans le fichier ';
                exit;
              }
            fclose($CLI1004);
             
              }

          }
       //affichage des commande dans un tableau.
     $Commandes = file ("commandes.txt") ;
    
    $Nombre_de_Commandes = count ($Commandes) ;
    if ($Nombre_de_Commandes == 0)
       {

         echo "<center> Commandes en cours. Veuillez ressayer plus tard.</CENTER>" ;
        }
         echo "<CENTER> <TABLE BORDER = 1>\n" ;
        echo "<tr>
        <th bgcolor = \"#b3b3ff\"> <font color='#4d004d'> <b> Numéro de Commande </b> </font> </td>
        <th bgcolor = \"#b3b3ff\"> <font color='#4d004d'> <b>Numéro Client</b> </font> </td>
        <th bgcolor = \"#b3b3ff\"> <font color='#4d004d'> <b> Date de Commande </b> </font> </td>
        <th bgcolor = \"#b3b3ff\"> <font color='#4d004d'> <b> Désignation article </b> </font> </td>
        <th bgcolor = \"#b3b3ff\"> <font color='#4d004d'> <b>Quantité (Pal)</b> </font> </td>
        <th bgcolor = \"#b3b3ff\"> <font color='#4d004d'> <b>Prix unitaire (Dhs)</b> </font> </td>
        <th bgcolor = \"#b3b3ff\"> <font color='#4d004d'> <b>Date de livraison</b> </font> </td>
        <th bgcolor = \"#b3b3ff\"> <font color='#4d004d'> <b> Adresse client</b> </font> </td>
        </tr> </CENTER>" ;

       for ($i = 0 ; $i < $Nombre_de_Commandes ; $i ++)

        {
            $ligne = explode( "|", $Commandes [$i] ) ;
         
         echo  "<tr>
         <td> > $ligne[0] </td>
         <td align = CENTER>  $ligne[1] </td>
         <td align = CENTER>  $ligne[2] </td>
         <td align = CENTER>  $ligne[3] </td>
         <td align = CENTER>  $ligne[4] </td>
         <td align = CENTER>  $ligne[5] </td>
         <td align = CENTER>  $ligne[6] </td>
         <td align = LEFT>  $ligne[7] </td>
         </tr>" ;
        }
echo "</TABLE>" ;
    

 ?>
</body>
</html>