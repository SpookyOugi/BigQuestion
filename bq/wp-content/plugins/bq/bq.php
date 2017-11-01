<?php
/*
Plugin Name: BigQ
Plugin URI: /
Description:  anonymous pool
Author: Dragana and Miha
Version: 0.1
Author URI: /
*/
add_action('admin_menu','bigquestion_admin_actions');
function bigquestion_admin_actions(){
    add_menu_page('BigQ','BigQ','manage_options',__FILE__,'bigquestion_admin');
}

function bigquestion_admin()
{

}

/*
add_shortcode('test_shortcode','my_shortcode_output');
//perform the shortcode output
function my_shortcode_output($atts, $content = '', $tag){
    $html = '';
    $html .= '<form name="forma"><label>Vprasanje: <br/> <input type="text"/></label> </form>';
    return $html;
}
*/


?>