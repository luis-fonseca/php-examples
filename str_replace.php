<?php

// $frase = "Hello World!";
// echo str_replace("World", "Luís", $frase);
$carta =    "Olá [meu amigo]!";
$carta .=    "<br /><br />";
$carta .=   "Soube que foi viajar de férias para [cidade]. Quando voltar gostaria de revê-la. Talvez possamos ir no [lugar].";
$carta .=    "<br /><br />";
$carta .=    "Abraços, [remetente]";

$tokensAntigos = ["[meu amigo]", "[cidade]", "[lugar]", "[remetente]"];
$tokensNovos = ["Patrícia", "Acapulco", "parque", "Luís"];

echo "Exemplo de uso da função str_replace()";
echo "<br /><br />";

echo str_replace($tokensAntigos, $tokensNovos, $carta);