<?php
/**
 * List of functions and definitions.
 * 
 * @version 1.00
 * @author  GW
 * @copyright 2023
 */

require_once get_template_directory() . '/child.php';

// register our theme and the component needed
binus_child_theme( 'binus-2023-302-psychology', array() );

// register component config
binus_component_configuration( array() );

/**
 * Theme controller
 */
class BINUS_Impulse {

    // class instance
   
    // setup controller

    /**
     * Get config
     * 
     * @return  array   $config
     * @since   1.0.0
     */


    // register config


    /**
     * Register web config: Home page
     * 
     * @since   1.0.0
     */
    
}

function Impulse() {
    return BINUS_Impulse::instance();
}

/**
 * Run controller
 */
Impulse()->main();

/**
 * Register web config
 */
binus_theme_config( array( Impulse(), 'register_config' ) );

// /**
//  * cards import
//  */
require_once get_stylesheet_directory() . '';

