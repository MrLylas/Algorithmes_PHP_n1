<?php

$sexe = "F" ;
$age = 32;
$resultsexe = $sexe == "F" ? "une femme" : "un homme";


echo "Age : $age<br>";
echo "Sexe : $sexe<br>";
echo "La personne est ";
//-------------------------------------------------------------à rentrer dans une variable---------------------------------------------------------------------------
if($sexe == "M" && $age >= 20){
        echo "imposable";
    }elseif($sexe == "F" && $age >= 18 && $age <= 35){
        echo "imposable";
    }   else{
            echo "non imposable";
        }
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
