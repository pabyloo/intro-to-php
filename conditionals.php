<?php


$temp = 38;
$str = 'Frank';
$truth = true;
$host = 'Justin';

/*
if ( $host === 'Frank')// you can use to test sth , w tym przypadku to bez znaczenia jesli uzywasz == lub ===. !==(not equal), 
{ 
    echo "Hello, $host";
} 
else 
{

// to zadziala jesli IF bedzie falszywy
echo "You are not $host";

}

*/

/*
if ( $temp > 40 ) 
{
echo "its hot";
}
else
{
echo "its cold";
}

*/

//var_dump( $str ); ta funkcja powie nam co to za zmienna string, integer, bool itd

// $temp === 38;  temp equals 32, == or ===(moze byc tylko tak lub nie) niemal to samo, przy === matchuje sie type i value

/*przykład

32 == '32' true

32 === '32' false

*/
// to see wich case is true :) 
switch ( $host )  
{
    case 'Justin':
        echo 'Hey Justin';
        break; //break allows to stop, jesli bysmy to usuneli to dalej by sie powtarzala ta funkcja

    case 'Frank';
        echo 'Hey Frank';
        break;
    default:
        echo 'hey there!'; // wtedy, gdy żadne nie bedzie pasowalo (ani frank ani justin)
}



?>