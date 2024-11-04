<?php

//Valeurs euro et francs :
$euro ="";

function convertisseur($converter){
    $francs = 100;
    $euro = $francs/6.55;
    echo "Montant en francs : $francs<br> 100 francs = $euro"."€";
}

convertisseur($euro);




