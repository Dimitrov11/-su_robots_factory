<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <!-- Add theme support title-tag in functions.php (13) -->
    <title><?php wp_title('|', true, 'right'); ?></title>

</head>

<body <?php body_class(); ?>>

    <!-- Site Header -->
    <div class="site-header-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/logo.png" alt="logo"></a>
                </div>
                <div class="col-sm-3 col-sm-offset-3 text-right">
                    <span class="ion-android-cart"></span> 0 products
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-robot" type="button">Search</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->

    <section id="header" class="main-header">
        <div class="container">

            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-nav-bar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <?php
                        if ( has_nav_menu( 'header-menu' ) ) {
                            wp_nav_menu( 
                                $args = array(
                                    'menu'            => 'site-nav-bar',
                                    'menu_class'      => 'nav navbar-nav',
                                    'menu_id'         => 'site-nav-bar-id',
                                    'container'       => 'ul',
                                    'container_class' => 'collapse navbar-collapse',
                                    'container_id'    => 'site-nav-bar',
                                    'theme_location'  => 'header-menu',
                                )
                            );
                        }
                    ?>

                </nav>
            </div>

            <div class="intro row">
                <div class="overlay"></div>
                <div class="col-sm-6 col-sm-offset-6">
                    <h2 class="header-quote">Save time and lower</h2>
                    <p>
                        Your sweeping costs with the
                    </p>
                    <h1 class="header-title">Robot<br><span class="thin">Factory</span></h1>
                </div>
            </div> <!-- /.intro.row -->
        </div> <!-- /.container -->
        <div class="nutral"></div>
    </section> <!-- /#header -->