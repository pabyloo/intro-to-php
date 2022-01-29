<?php

/**
 * class to initialize vehicles
 */
class Vehicle 
{
    
    private $color = 'blue'; //property

    function __construct($color = 'blue')
    {
        $this->color = $color;
    }
   
    function get_color() //method
    {
        return $this->color;
    }

    function set_color( $color)
    {
        $this->color = $color;
    }
}



?>