<?php
$terreno = $_POST['terreno'];
$prob_terreno = $terreno * 10 - 5;
$atq_atq = $_POST['atq_atq'];
$prob_atqatq = $atq_atq * 10 - 5;
$atq_def = $_POST['atq_def'];
$def_atq = $_POST['def_atq'];
$def_def = $_POST['def_def'];
$prob_defdef = $def_def * 10 - 5;

$prob_suc = $prob_atqatq - $prob_terreno - $prob_defdef;
$prob_suc = $prob_suc * 2;
;

echo "O terreno é de dif " . $terreno . ", o que diminui a probabilidade de sucesso do ataque em " . $prob_terreno . "%. <br>
    O atacante tem " . $atq_atq . " de potencial de ataque, o que aumenta a probabilidade de sucesso do ataque em " . $prob_atqatq . "%. <br>
    O defensor tem " . $def_def . " de potencial de defesa, o que diminui a probabilidade de sucesso do ataque em " . $prob_defdef . "%. <br>";

echo $prob_atqatq . " + " . $prob_terreno . " - " . $prob_defdef . " = " . $prob_suc . "<br>";

switch ($prob_suc){
    case $prob_suc >= 85:
        echo "Sucesso! As forças defensoras foram completamente obliteradas.";
        break;
    case $prob_suc >= 75 && $prob_suc <= 84:
        echo "Sucesso! As forças defensoras foram quase completamente obliteradas.";
        break;
    case $prob_suc >= 55 && $prob_suc <= 74:
        echo "Sucesso! As forças defensoras foram derrotadas e partiram em retirada.";
        break;
    case $prob_suc >= 45 && $prob_suc <= 54:
        echo "Sucesso. Foi por pouco, mas as forças defensoras perderam.";
        break;
    case $prob_suc >= 55 && $prob_suc <= 44:
        echo "Fracasso. Foi por pouco, mas as forças atacantes perderam.";
        break;
    case $prob_suc >= 45 && $prob_suc <= 54:
        echo "Fracasso! As forças atacantes foram derrotadas e partiram em retirada.";
        break;
    case $prob_suc >= 21 && $prob_suc <= 44:
        echo "Fracasso! As forças atacantes foram quase completamente obliteradas.";
        break;
    case $prob_suc <= 20:
        echo "Fracasso absoluto! As forças atacantes foram completamente obliteradas";
        break;
}    


?>