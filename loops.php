<?php

$new = array( 'blue', 'red', 'green' );

//  create for loop to say hi justin 9 times

for ( $i=0; $i < count($new); $i++) //variable, condition and transaction to that variable, withou count you may use number :) 
{ 
    echo "<p>Hi. Justin!!!!</p>";

}

// create foreach loop to create strings telling us "people nad favotirte colours"

/*

    //1st example :)

$hosts = array(
    array( 'name' => 'Justin', 'color' => 'blue ' ),
    array( 'name' => 'Frank', 'color' => 'green '),
    array( 'name' => 'Steven', 'color' => 'red '),
    array( 'name' => 'Alexa', 'color' => 'indigo ')
);
foreach ($hosts as $host) 
{
    echo "{$host["name"]}'s favoriote color is {$host["color"]}<br>" ;
}

*/
    //2nd example :)
$hosts = array(
    'Justin' => 'blue ',
    'Frank' => 'green ',
    'Steven' => 'red ',
    'Alexa' => 'indigo '
);
foreach ($hosts as $name => $color) 
{
    echo "{$name}'s favoriote color is {$color}<br>"  ;
}


// create a coin flipping while loop looking for three heads. If three heads will appear it will stop runnig for example H T H H - stopped, H T T T H H - stopped running

$heads_count = 0;
$total_count = 0;
while ($heads_count < 3) 
{
    $flip = rand(0, 1); // its gonna return 0 or 1
    if ( $flip )
    {
        $heads_count++; //This is connected to heads_count < 3, it will start 3 times
        echo "Head"."<br>";
    }
    else
    {
        echo "Tales"."<br>";
    }
    $total_count++; //This function will end the loop after 20 times
    if ( $total_count > 20)
    {
        break;
    }

}

?>