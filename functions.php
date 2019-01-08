add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields', 10, 1 );
function custom_override_checkout_fields( $fields ) {

    $fields['billing']['billing_city']['default'] = 'Beverly Hills';
    $fields['billing']['billing_postcode']['autocomplete'] = null; // Removing autocomplete

    return $fields;
}
