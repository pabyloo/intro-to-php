<?php

$temp = 78; //integer 78, float - 78.25
$str = ' hello, '; // 'string', aby była spacja mozemyzrobi cos takiego 'spacja_to_co_chcesz_napisac'


echo $temp;
echo $str;

//kalkulator do zmiany stopni z celsjusza na fahrenheita lub odwrotnie

$f = 78;
$str_2 = 'Frank';

// $test = $f + 15;  $test = $str + $str_2; - to nie zadziala poniewaz jesli stawiasz + to php oczekuje int albo float, $test = $str . $str_2; - to jest poprawne
$c = ($f - 32) * 5 / 9;

$output = " The temp in C is {$c}"; //{}  for more complex variables a jesli chcemy dodac kilka variables to ribumy tak "tekst {str} tekst {str} tekst {str}";

// $test = $str . $str_2; łączenie stringów

echo $output;
// echo $c; - jezeli w zmiennej nie dodalibysmy $c


?>