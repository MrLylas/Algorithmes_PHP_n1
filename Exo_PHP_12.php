<?php

$personnes = [
    "Mickaël"=>"FRA",
    "Virgile"=>"ESP",
    "Marie-Claire"=>"ENG"
];

function ($salutations){
    foreach ($personnes as $prenom => $prenom){
        echo "Bonjour $personnes";
    }
}

