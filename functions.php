//adding new menu list
function register_my_menus() {
    register_nav_menus(
        array(
            'eco-nomical' => __( 'Eco Nomical' ),
            'beurea-static' => __( 'Beurea Static' ),
            'eco-nomical-mob' => __( 'Eco Nomical Mob' ),
            'beurea-static-mob' => __( 'Beurea Static Mob' )
        )
    );
}
add_action( 'init', 'register_my_menus' );