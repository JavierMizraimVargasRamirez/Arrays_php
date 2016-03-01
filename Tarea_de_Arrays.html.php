<!DOCTYPE html>
<html>
 <head>
   <meta httpaquiv="Content-Type" content="text/html;charset=UTF-8">
   <title></title>
     </head>
     <body>
     <?php

     $a["Datos"]["Nombre"] = "Javier", "Joel", "Ramon","Roberto", Juan";
     $a["Datos"]["Apellidos"] = "Vargas", "Flores", "Gaxiola", "Perez", "Munguia";
     $a["Datos"]["Edad"] = "15", "18", "23", "40", "36";
     $a["Datos"]["Ciudad"] = "Guadalajara";

        $keys = array_keys ($a["Datos"]);

        $table = "<table border =\"1\">";
        $table .="<tr>";

        foreach($keys as $i)
        {
            $table.= "<th>".$i."</th>;

        }//[end foreach]
        $table .= "</tr>";

        foreach(keys as $i)
        {
            $table .="<td>".$a["Datos"]["${i}"]."</td>";

        }//[end foreach]

        $table="</table>";

         echo $table;
         //echo<"pre>"; var_dump(keys); echo "</prev>";
         ?>
         </body>
        </html>