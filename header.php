<?php /**  * The header for our theme  *  * This is the template that displays all of the <head> section and everything up until <div id="content">  *  * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials  *  * @package mobilityblog.eu  */  ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?> </head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php esc_html_e( 'Skip to content', 'mobilityblogeu' ); ?> </a>
        <header id="masthead" class="site-header">
            <div class="toggle-menu-space">


                <nav id="mobile-navigation" class="mobile-navigation">
                    <div class="toggle-menu-space">
                        <div class="toggle-menu">
                            <input type="checkbox" id="toggler" />
                                <span class="burgerpiece"></span>
                                <span class="burgerpiece"></span>
                                <span class="burgerpiece"></span>


                            <?php    wp_nav_menu( array(     'theme_location' => 'menu-2',     
                                                                 'menu_id'        => 'mobile-menu',  
                                                                  'container' => ''
                                                                
                                                                ) );    ?>

                        </div>
                    </div>
                </nav>


            </div>
            <div class="grid-container">
                <div class="grid-x">
                    <div class="site-branding large-4">
                        <?php    the_custom_logo();    if ( is_front_page() && is_home() ) :     ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?> </a>
                        </h1>
                        <?php    else :     ?>
                        <p class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?> </a>
                        </p>
                        <?php    endif;    $mobilityblogeu_description = get_bloginfo( 'description', 'display' );    if ( $mobilityblogeu_description || is_customize_preview() ) :     ?>
                        <p class="site-description">
                            <?php echo $mobilityblogeu_description; /* WPCS: xss ok. */ ?> </p>
                        <?php endif; ?> </div>
                    <!-- .site-branding -->
                    <nav id="site-navigation" class="main-navigation large-8">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <?php esc_html_e( 'Primary Menu', 'mobilityblogeu' ); ?></button>
                        <?php    wp_nav_menu( array(     'theme_location' => 'menu-1',     'menu_id'        => 'primary-menu',    ) );    ?>
                    </nav>
                    <!-- #site-navigation -->
                </div>
            </div>
        </header>
        <!-- #masthead -->
        <div id="content" class="site-content grid-container">
            <div class="grid-x grid-margin-x">
