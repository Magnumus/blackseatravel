<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="180; URL=#">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/grid.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/fontello.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/fontello-codes.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/secondPage.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/images/logo.ico" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Amiri:400,700&amp;subset=arabic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/js.js"></script>
    <title><?php wp_title(); ?></title>

</head>
<body>
<input type="checkbox" id="menu-burger-button">
<nav id="offcanvas-menu">
    <label for="menu-burger-button">
        <span></span>
        <span></span>
        <span></span>
    </label>
    <?php /**
                       *Displays a navigation menu
                       * @param array $args Arguments
                        */
                        
    $args = array(
        'container' => 'ul',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'items_wrap'=>'<ul id = "%1$s" class = "%2$s"><li><a href="http://seasonvar.ru/serial-4975-Teoriya_bolshogo_vzriva-006-sezon.html">%3$s</a></li></ul>',
        'depth' => 0
    );
                    wp_nav_menu($args);?>

</nav>
<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row justify-center align-center">
                <div class="logo col-2 col-m-2 col-s-4">
                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo"></a>
                </div>
                <div class="col-8 col-m-8 col-s-1">
       
                    <nav class="main-menu text-center">
<?php /**
                       *Displays a navigation menu
                       * @param array $args Arguments             */
                        
    $args = array(
        'container' => 'ul',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'items_wrap'=>'<ul id = "%1$s" class = "%2$s">%3$s</ul>',
        'depth' => 0
    );
                    wp_nav_menu($args);?>
                        
                    </nav>
                </div>
                <div class="text-right col-2 col-m-auto col-s-auto home">
                    <a href="#">المنزل</a>
                </div>
            </div>
        </div>
    </div>

