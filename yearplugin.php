<?php

/*
 * Plugin Name:       YearPlugin
 * Description:       Creating a Wordpress plugin
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Chrisaner
 */

 function year_shortcode() {
    $year = date('Y');
    return $year;
    }
    add_shortcode('year', 'year_shortcode');
    