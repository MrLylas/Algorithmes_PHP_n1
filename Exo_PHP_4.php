<?php

// $sentence = "";

// // enlever les maj 

// $minuscule = strtolower($sentence);

// // enlever les espaces

// $text_brut = str_replace(' ','',$minuscule);

// // créer une variable reverse 

// $rev_text = strrev($text_brut);

function palindrome($phrase){

    $minuscule = strtolower($phrase);// enlever les maj 
    $text_brut = str_replace(' ','',$minuscule);// enlever les espaces
    $rev_text = strrev($text_brut);// créer une variable reverse

    if ($text_brut == $rev_text){
        $resultat = "Palindrome";
        echo $resultat;
    }

    else{
        $resultat = "Pas un palindrome";
        echo $resultat;
    }
}

$sentence = "Engage le jeu que je le gagne";

palindrome($sentence);


