<?php
/*
This template is used to display header
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head()?>
    <style type="text/css">
        body{
            background: <?php echo get_theme_mod('wplearnig_body_bg_color','#fff')?>;

        }
        .site-navigation {
            background: <?php echo get_theme_mod('wplearnig_nav_bg_color','#2ca358')?>;
        }
        
    </style>
</head>
<body>

    <div class="site-main">
        <header class="site-header">
            <div class="site-branding">
                <a href="<?php bloginfo('url')?>"><?php the_custom_logo()?></a>
            </div>
        </header>
    <nav class="site-navigation">
        <?php wp_nav_menu($args)?>
    </nav>
    <!-- <script type="text/javascript">
        jQuery(document).ready(function($){
            $("h1").fadeOut();
        });
    </script> -->