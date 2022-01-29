<?php

//pseudocode
// store a string of # into a variable

$str = '3 5 75 14 1 90'; 


//convert the string into an array

$numbers = explode( ' ', $str); // explode creates array from string

        //var_dump( $numbers); // let's take a look at our numbers real quick so we can decide which one we're after

// sort the array

sort( $numbers ); //This will sort numbers from $str from lowest to highest


// convert the array to string

$output = implode( ',', $numbers); //implode returns a string from elements of an array, we add extra coma ','


// goal : output a  string of numbers low to high

echo "<h1>The values</h1>"; //we add extra string here
echo "<p>{$output}</p>";

// chech if 5 is in array

if ( in_array ('5', $numbers) )
{
    echo "5 is found";
}
else
{
    echo "5 is not found";
}

// multidimensional array example, with arrays inside

$new = array(
        array( 'blue, green'),
        array( 'red', 'orange')
);


/* // example with sorting false and true

$new = array(true, false, true, false);

sort( $new );

var_dump( $new);
*/



?>