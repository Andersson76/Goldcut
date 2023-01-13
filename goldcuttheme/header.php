<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goldcut</title>

    <?php wp_head(); ?>

</head>
<body <?php body_class('body')?>>

<header class="header-gc" id="myHeader">

<section>
    <div class="container-fluied">
        <div class="top-bar">
            <div class="row">
                <div class="col brand-usp">
                    <p>VI ÄR VÄRLDSMÄSTARE PÅ HÅR</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="d-lg-flex align-items-center vertical-box menu-header">
    <a class="toggle-nav" href="#">&#9776;</a>
            <div class="col-md-2 logo">
                <?php the_custom_logo(); ?>
            </div>
            
            <nav class="col-md-7 nav-menu">
                <div class="skip-link screen-reader-text">
                    <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'compass' ); ?>">
                        <?php _e( 'Skip to content', 'twentyten' ); ?>
                    </a>
                </div>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu'
                    )
                );?>
            </nav>
            <div class="col-md-3 nav-menu-icons">
                <?php aws_get_search_form( true ); ?>
            </div>
        </div>
    </div>
</section>

</header>
