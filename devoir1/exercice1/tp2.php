/*
OUSAYD Lahcen
AIT OUALI Es_saadia
*/
<!DOCTYPE html>
<HTML>

          <HEAD>

                    <TITLE> Légumes&Fruit </TITLE>

           </HEAD>

                    <BODY>

                <BR/> <BR/> <BR/>

               

                <H1> <CENTER> <BR/> Délice des Fruits & légumes. </CENTER> </H1>

                

                <BR/> <BR/> <BR/>

                <TABLE WIDTH = 100%>

                <tr>

                <?php

                $pictures = array ("imgs/1.jpeg", "imgs/2.jpeg", "imgs/3.jpeg") ;

                shuffle ($pictures) ; 

                for ($i = 0 ; $i < 3 ; $i ++)

            {

                echo "<td align = 'center'> <img src = \"" ;

                echo $pictures [$i] ;

                echo " \" width = '200' height = '200' </td>" ;

            }

                ?>

                </tr>

                </TABLE>

                    </BODY>

</HTML>
