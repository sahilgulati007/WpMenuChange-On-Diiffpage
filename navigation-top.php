<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
if(is_page('beurea-static4')){$l="Beurea Static";}else if(is_page('eco-nomical4')){ $l= "Eco Nomical";}else{ $l= 'Top Menu';}
?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( $l, 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="<?php if(is_page('beurea-static1')){echo "beurea-static";}else if(is_page('eco-nomical1')){ echo "eco-nomical";}else{ echo 'top-menu';} ?>" aria-expanded="false">
        <?php
        echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
        echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
        _e( 'Menu', 'twentyseventeen' );
        ?>
    </button>

	<?php
    if(is_page('beurea-static')){
        //echo "beurea-static";
        if(wp_is_mobile()){
            wp_nav_menu(array(
                'theme_location' => 'beurea-static-mob',
                'menu_id' => 'beurea-static-mob',
                'menu_class' => 'nav-menu',

            ));
        }
        else {
            wp_nav_menu(array(
                'theme_location' => 'beurea-static',
                'menu_id' => 'beurea-static',
                'menu_class' => 'nav-menu',

            ));
        }
    }
    else if(is_page('eco-nomical')){
        //echo "eco-nomical";
        if(wp_is_mobile()){
            wp_nav_menu(array(
                'theme_location' => 'eco-nomical-mob',
                'menu_id' => 'eco-nomical-mob',
                'menu_class' => 'nav-menu',

            ));
        }else {
            wp_nav_menu(array(
                'theme_location' => 'eco-nomical',
                'menu_id' => 'eco-nomical',
                'menu_class' => 'nav-menu',

            ));
        }
    }
    else{
        //echo 'top';
        wp_nav_menu( array(
		    'theme_location' => 'top',
		    'menu_id'        => 'top-menu',
            'menu_class'     => 'nav-menu',

	    ) );
    } ?>

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
