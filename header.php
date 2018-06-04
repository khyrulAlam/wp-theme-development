<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo bloginfo('name')?></title>
        <meta name="description" content="<?php echo bloginfo('description')?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" href="<?php echo get_theme_file_uri()?>/assets/img/logo.png">
        <!-- Place favicon.ico in the root directory -->

        <?php wp_head();?>

    </head>
    <body <?php body_class();?>>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->


        <!-- Navigation -->
        <?php get_template_part( '/template-parts/navigation' );?>