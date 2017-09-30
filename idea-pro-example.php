<?php
/**
*Plugin Name: Idea Pro Example Plugin
*Description: This is just an example plugin
*Version: 1.0
*Author: Jerry Pallath
**/

    function ideapro_example_function()
    {
       $information = "This is a very basic plugin" ;
       return $information;
    }
    add_shortcode('example','ideapro_example_function');

?>