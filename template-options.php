<?php 

/* Template Name: Options */

$color = get_field('choose_your_color');

get_header();?>

<section class="page">
    <div class="container">
        <h1>
            <?php the_title();?>
        </h1>

        <strong>Colours: </strong><?php echo $color ;?>
    </div>
</section>

<?php get_footer();?>