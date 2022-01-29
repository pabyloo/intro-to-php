<?php

include( 'class-vehicle.php' );

$truck = new Vehicle('orange');
$truck->set_color('green');
echo $truck ->get_color(); // whats the truck color from method

$car = new Vehicle('red');
echo $car->get_color();

?>