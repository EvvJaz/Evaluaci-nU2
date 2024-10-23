<?php
/* CBTIS 89
   Examen2AArellanoAvila.php
   Programa que almacena los preecios de 5 articulos en un arreglo
   Evolet Jazmìn Arellano Àvila
   3ªA Programaciòn Matutino
*/

$arrayPrecios = array(500,400,200,700,100);

$arrayIVA = array();
$arraySubtotal = array();
$arrayDescuentos = array();
$arrayTotal = array();

$longitud = count($arrayPrecios);
   for($i=0; $i<$longitud; $i++){
$arrayIVA[$i]=$arrayPrecios[$i]*0.16;
$arraySubtotal[$i]=$arrayPrecios[$i]+$arrayIVA[$i];
$arrayDescuentos[$i]=$arraySubtotal[$i]*0.10;
$arrayTotal[$i]=$arraySubtotal[$i]-$arrayDescuentos[$i];
}

echo "ARREGLO PRECIOS <br>";
for($i=0; $i<$longitud; $i++){
   echo $arrayPrecios[$i];
   echo "<br>";
   }
echo "<br>";

echo "ARREGLO IVA <br>";
for($i=0; $i<$longitud; $i++){
   echo $arrayIVA[$i];
   echo "<br>";
   }
echo "<br>";

echo "ARREGLO SUBTOTAL <br>";
for($i=0; $i<$longitud; $i++){
   echo $arraySubtotal[$i];
   echo "<br>";
   }
echo "<br>";

echo "ARREGLO DESCUENTOS <br>";
for($i=0; $i<$longitud; $i++){
   echo $arrayDescuentos[$i];
   echo "<br>";
   }
echo "<br>";

echo "ARREGLO TOTAL <br>";
for($i=0; $i<$longitud; $i++){
   echo $arrayTotal[$i];
   echo "<br>";
   }
echo "<br>";