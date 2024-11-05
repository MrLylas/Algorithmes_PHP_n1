<?php

$facture = 152;
$verse = 200;

$reste = $verse - $facture;

echo "Montant à régler : $facture<br>";
echo "Montant versé : $verse<br>";
echo "Montant à rendre : $reste<br>";

$compteur = 0;

while ($reste >= 20){
    $reste = $reste - 20;
    $compteur++;
}if ($compteur > 0){
    echo "<br>$compteur billet(s) de 20 euros<br>";
}

$compteur = 0;

while ($reste >= 10){
    $reste = $reste - 10;
    $compteur++;
}if ($compteur > 0){
    echo "$compteur billet(s) de 10 euros<br>";
}

$compteur = 0;

while ($reste >= 5){
    $reste = $reste - 5;
    $compteur++;
}if ($compteur > 0){
    echo "$compteur billet(s) de 5 euros<br>";
}

$compteur = 0;

while ($reste >= 2){
    $reste = $reste - 2;
    $compteur++;
}if ($compteur > 0){
    echo "$compteur pièce(s) de 2 euros<br>";
}

$compteur = 0;

while ($reste >= 1){
    $reste = $reste - 1;
    $compteur++;
}if ($compteur > 0){
    echo "$compteur billet(s) de 1 euros";
}