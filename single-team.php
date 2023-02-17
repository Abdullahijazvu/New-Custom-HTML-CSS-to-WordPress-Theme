<?php
$locations = get_field('locations');

get_header();?>

<section class="page">
    <div class="container">
        <h1><?php the_title()?></h1>
        <?php foreach($locations as $location):?>
            <img src="<?php echo get_the_post_thumbnail_url($location->ID, 'thumbnail')?>">
            <br/>
            <strong>Location: <a href="<?php the_permalink($location->ID)?>"><?php echo $location->post_title;?></strong></a>
            <br/>
            <?php the_field('address')?>
            <?php echo $location->post_content;?>
        <?php endforeach;?>

    </div>
</section>

<?php get_footer();?>