
<?php 

function shortcode_wizard_load_template( $template, $attrs = array() ) 
{
    ob_start();
    include (SHORTCODE_WIZARD_DIR_PATH . '/templates/' . $template);
    return ob_get_clean();
}

function shortcode_wizard_load_register_form(  )
{
    return shortcode_wizard_load_template( 'form.php' );   
}

function shortcode_wizard_load_copyright( ) 
{
    return shortcode_wizard_load_template( 'copyright.php' );
}
function shortcode_wizard_color_register( $attrs )
{
    $attrs = shortcode_atts(
    array(
        'name' => 'ram',
        'color' => 'red'
    ), $attrs );
    return shortcode_wizard_load_template('colors.php', $attrs);
}

function shortcode_wizard_load_date()
{
    return shortcode_wizard_load_template( 'date.php' );
}

function shortcode_wizard_load_table()
{
    return shortcode_wizard_load_template( 'table.php' );
}