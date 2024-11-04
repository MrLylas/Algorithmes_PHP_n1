<?php

$unitaire = 9.99;
$quantite = 5;
$tva = 0.20;
$total = 59.94;

$total_TVA = ($unitaire*$quantite)*$tva;
$total_HT = $unitaire * $quantite;
$total_TTC = $total_HT +  $total_TVA;

echo "Prix unitaire de l'article : $unitaire<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $tva<br>";
echo "Total Hors taxe : $total_HT<br>";
echo "Le montant de la facture à regler est de :  $total_TTC";


