<?php

$chaineDeCaracteres1 = "Notre formation DL commence aujourd'hui";

$nouvellePhrase = str_replace("aujourd'hui","demain",$chaineDeCaracteres1);

echo "Ancienne phrase : ".$chaineDeCaracteres1."<br>";
echo "Nouvelle phrase : ".$nouvellePhrase;
