<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open(); ?>

<headre>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-4" id="navbarSupportedContent">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container' => '',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => '',
                        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 0,
                        'walker'            => new WP_Bootstrap_Navwalker(),

                    ));
                ?>
            </div>
        </div>
    </nav>
</headre>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>