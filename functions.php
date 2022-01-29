<?php
// function that is flipping coin
/*

displays a greet!

*/
/*
function display_greeting() //function which is echoing name
{
    echo 'Hello Pawel!';
}

//display_greeting(); 

*/
//--------------------------------------------------------------------------------

/*

Flips a coin

@return string returns 'H' or 'T'
*/


function coin_flip()
{
    $flip = rand(0, 1); // its gonna return 0 or 1
    if ( $flip )
    {
        return "H"."<br>";
    }
    else
    {
        return "T"."<br>";
    }
}

$flip = coin_flip();
//echo $flip;

//-----------------------------------------------------------------------
/*
displays greeting to $name

@param string $name the name of the person we want to greet
*/

/*

function say_hi( $name = 'Stranger')
{
    echo "Hi $name";
}
say_hi("Frank");
say_hi();//It will show the value of name which is in function say_hi

*/
// --------------------------------------------------------------------

/**
 * 
 * takes two numbers and multiplies them
 * 
 * @param int $x the first number
 * @param int $y the second number
 * @return int The product of the 2 #'s multiplied
 */

function multiply( $x, $y=0)
{
    return $x * $y;
}

$num = multiply(2, 4);
$num_2 = multiply( 4 );
echo "$num and $num_2";




?>