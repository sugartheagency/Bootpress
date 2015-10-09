<?php
/**
 * Custom Page Header
 *
 * @package WordPress
 * @subpackage Bootpresswp
 * @since Bootpresswp 0.1
 *
 * Last Revised: Oct 09, 2015
 */
global $childDir;
$childDir = dirname(get_bloginfo('stylesheet_url'));
?><!DOCTYPE html>
<!-- Bootpresswp -->
<!-- http://www.anomalous.co.za/bootpresswp -->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php print $childDir; ?>/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-57x57-precomposed.png">
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
        <script src="<?php print $childDir; ?>/assets/js/vendor/html5shiv.js"></script>
    <![endif]-->
</head>
<body <?php body_class(''); ?>>
    <!--[if lt IE 9]>
    <h3>Please upgrade your web browser</h3>
    <p>We recommend that you <a href="http://browsehappy.com/" style="color:#000;text-decoration:underline">upgrade</a> your web browser so you can use this Website.</p>
    <p>Why do I have to update my browser?<br> Old browsers (especially Internet Explorer versions 6, 7, and 8) are less stable, and much more vulnerable to viruses, spyware, malware, and other security issues. So security alone is a very good reason to upgrade.<br><br> But there is more: We rely on new Web design technologies. These new languages serve as a foundation for many websites today, and for virtually all new websites and Web apps. But unfortunately, many of these new websites will neither look nor function in the same way in old browsers like IE8.</p>
    <p>Thanks</p>
    <![endif]-->
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="modal" data-target="#nav-modal" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">Project name</a>
                </div>
                <?php
                    wp_nav_menu( array(
                        'menu'              => 'main-menu',
                        'theme_location'    => 'main-menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
                <!-- Mobile Nav Fullscreen Modal -->
                <div class="modal fade" id="nav-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-nav-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-nav-body">
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'main-menu',
                                'theme_location'    => 'main-menu',
                                'depth'             => 2,
                                'container'         => 'ul',
                                'container_class'   => '',
                                'container_id'      => '',
                                'menu_class'        => '',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                        <!--<ul style="list-style: none;text-align: center;">
                          <li><a href="/">Home</a></li>
                          <li><a href="/our-story">Our Story</a></li>
                          <li><a href="/contact">Contacts</a></li>
                          <li><a href="/products">Products</a></li>
                        </ul>-->
                      </div>
                    </div>
                  </div>
                </div>  
                <!-- End Mobile Nav Fullscreen Modal -->   

            </div>
        </nav>
      </div>
    </div>