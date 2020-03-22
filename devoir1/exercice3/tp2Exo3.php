<!DOCTYPE html>
<HTML>
   <HEAD>
 		<TITLE>Une Centrale d’achats-les commandes clients </TITLE>
   </HEAD>
   <BODY>
        <BR/> <BR/>
    <H1> <CENTER>  Centrale d’achats</CENTER> </H1>
    <H2> <CENTER> commandes clients </CENTER> </H2>
    <?php
    
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

  </BODY>

</HTML>