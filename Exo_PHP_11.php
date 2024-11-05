<?php

$marques = ["Peugeot","Renault","BMW","Mercedes"];
$nbmarques = count($marques);

echo "Il y a $nbmarques marques de voitures dans le tableau<br><br>";

$i=0;

while($i < $nbmarques){
    echo "-".$marques[$i]."<br>";
    $i++;
}
