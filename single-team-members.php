<?php
$locations = get_field('locations');
$related_posts = get_field('related_post');

get_header();?>

<section class="page">
    <div class="container">
        <h1><?php the_title()?></h1>
        <?php foreach($locations as $post):?>
            <?php setup_postdata($post);?>
            <?php the_title();?>
            <?php the_field('address')?>
        <?php wp_reset_postdata(); endforeach;?>
        <?php if($related_posts):?>
            <ul class="list-group">
            <?php foreach($related_posts as $p):?>
            <br/>
            <li class="list-group-item">
            <a href="<?php echo get_the_permalink($p->ID);?>"><?php echo $p->post_title;?></a>
            <?php echo $p->post_content;?>
            </li>
            <?php endforeach;?>
            </ul>
        <?php endif;?>

    </div>
</section>

<?php get_footer();?>