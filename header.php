<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

<meta charset="utf-8">
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.html">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="theme-color" content="#ffffff">


<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

<title>Main page - Carbon</title>
<link rel="canonical" href="index.html">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary_large_image">


<link rel="dns-prefetch" href="<?php echo get_template_directory_uri(); ?>http://code.jivosite.com/">
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/css/global-styles.css" type="text/css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/classic-style.min.css" type="text/css" media="all">
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/css/cf-css.min.css" type="text/css" media="all">
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.min.css" type="text/css" media="all">
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.min.css" type="text/css" media="all">
<!-- mobile -->
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<!-- Facebook Pixel Code -->
</head>
<body>
<header class="header">
        <div class="header__blured">
            <div class="container">
                <div class="header__visible">
                    <a href="index.html" class="logo img header_logo_img">
                        <img class="header_logo_white skip-lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_white.svg" alt>
                        <img class="header_logo_black skip-lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_black.svg" alt>
                    </a>
                    <div class="open_menu toggle_menu_button">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="hidden_menu">
                <div class="-scrollbar menu_scroll">
                    <div class="container hidden_menu__container">
                        <ul class="menu__list -opacity_hover">
                            <?php
                            wp_nav_menu(array('theme_location'=>'primary-menu','menu_class'=>'menu__list'));
                            the_title();
                            ?>
                        </ul>
                        <div class="hidden_menu__footer">
                            <div class="social_icon__list"><a title="Tiktok" target="_blank" href="https://www.tiktok.com/@carboncoskins" class="img social_icon -opacity_hover"><noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2021/06/social_tiktok.svg" alt="Tiktok"></noscript><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Tiktok" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/2021/06/social_tiktok.svg" class=" lazyload"></a>
                                <a title="Facebook" target="_blank" href="https://www.facebook.com/carboncoskins" class="img social_icon -opacity_hover"><noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2021/06/social_fb.svg" alt="Facebook"></noscript><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Facebook" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/2021/06/social_fb.svg" class=" lazyload"></a>
                                <a title="Instagram" target="_blank" href="https://www.instagram.com/carboncoskins/" class="img social_icon -opacity_hover"><noscript><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2021/06/social_insta.svg" alt="Instagram"></noscript><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Instagram" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/2021/06/social_insta.svg" class=" lazyload"></a>
                            </div>
                            <div class="separator"></div>
                            <a href="terms-and-conditions/index.html" class="terms_use -opacity_hover">Terms and conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>