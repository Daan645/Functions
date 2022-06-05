<?php
/**
 * Astra Child Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child Theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_THEME_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

////////////////////////
/// formulier functie//////////


if (isset($_POST ['BtnSubmit'])){

    global $wpdb;

    $data_array = array(
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'mobile' => $_POST['mobile'],
        'comment' => $_POST['comment']
    );

    $table_name = 'form_entry';

    $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);

    // $rowResult return 1

    if ($rowResult == 1){
        echo '<h1>Form Submit Succesfully In Database!</h1>';
    } else{
        echo 'Error Form Submission !';
    }

    die;
}
