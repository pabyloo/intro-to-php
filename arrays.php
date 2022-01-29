<?php

/*
$str = 'Frank ';

echo $str;
*/

$colors = array(' blue ', ' red ', ' orange '); //tablica kolorów , numerical array

// echo $colors[0]; wypisuje z tablicy kolor w pozycji 0 czyli blue

// var_dump($colors); //to wprowadzamy, jesli chcemy zobaczyc co jest pod zmienną $colors czyli numer pod którym kryje się index i co $colors ocznacza w tym przypadku to tablica

$hosts = array('Justin' => ' blue ', 'Frank' => ' green ');

// echo $hosts['Frank']; // wtym wypadku wypisujemy z tablicy asocjacyjnej $hosts jaki ulubiony kolor jest danego hosta(Frank lub Justin)


//---------------------------------------------------------------------------------------------------------

// tutaj poniżej Justin chce miec przypisany kolor różowy :)

$hosts["Justin"] = "Pink"; // można tego użyć aby zastąpić jakiś index w tabeli

//jeżeli jest coś co chcemy usunąć można użyć funkcji unset

$colors[0] = "Pink";

unset( $colors[1]);

$colors[0] = $colors[0] . ' and Yellow'; // dodawnie stringa do tablicy do indeksu

//var_dump($hosts);

//var_dump($colors); // doo linijki 31
 
//---------------------------------------------------------------------------------------------------------------

/*
$hosts2 = array('Justin' => 24 , 'Frank' => 'seventeen', 'Beth' => true, 'Adam' => 5.254, 5 => 'eight');

var_dump($hosts2)
*/
//------------------------------------------------------------------------------------------------------------------

$hosts3 = array('Justin' => 24 , 'Frank' => 'seventeen', 'Beth' => true, 'Adam' => 5.254, 5 => 'eight');

if ( $hosts3["Justin"] === 'green')
    {
        echo 'Justin likes green';
    }
    else
    {
        echo 'Justin does not like green. ';
    }

    if ( $hosts3["Justin"] === 5)
    {
        echo 'Justin likes green';
    }
    else
    {
        echo 'Justin does not like green. ';
    }
    switch ($hosts3["Justin"])
    {
        case 5:
            # code... 
            break;

        default:
            # code... 
            break;
    }

?>