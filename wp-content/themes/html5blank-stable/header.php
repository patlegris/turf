<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <!--Google Fonts CDN   -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Droid+Sans:400,700' rel='stylesheet'
          type='text/css'>
    <style>
        body {
            font-family: 'Tangerine', serif;
            font-size: 20px;
        }
    </style>
    <!--End Google Fonts CDN   -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

</head>
<body <?php body_class(); ?>>

<!-- Cavalier 16 -->
<div class="img">
    <a>
        <img src="<?php echo home_url(); ?>/wp-content/uploads/Cavalier_16.png" class="cavalier16"
             alt="Cavalier">
    </a>
</div>
<!-- /Cavalier 16 -->

<!-- wrapper -->
<div class="wrapper">

    <!-- header -->
    <header class="header" role="banner">
        <!-- logo -->
        <div class="logo">
            <a>
                <img src="<?php echo home_url(); ?>/wp-content/uploads/Turf_logo.png" alt="Logo" class="logo-img">
            </a>
        </div>
        <!-- /logo -->
    </header>
    <!-- /header -->

</div>
<!-- wrapper -->

<!-- nav -->
<nav class="nav" role="navigation">
    <?php html5blank_nav(); ?>
</nav>
<!-- /nav -->

<!-- wrapper -->
<div class="wrapper">
