<?php

defined('ABSPATH') or die("Thanks for visting");

/**
  * Plugin Name:  body-class-extender
  * Description: Allows to add classnames to the body tag via url parameters
  * Version: 1.0
  * Author: Robert Schrenk
  * License: GPL3
  * License URI:  http://www.gnu.org/licenses/gpl-3.0.html
  * Text Domain:  body-class-extender
  */

function body_class_extender_add_body_class($classes) {
    if (!empty($_GET['classnames'])) {
        $classnames = explode(',', $_GET['classnames']);
        foreach ($classnames AS $classname) {
            $classes[] = 'extended-' . $classname;
        }
    }
    return $classes;
}
add_filter( 'body_class','body_class_extender_add_body_class' );
