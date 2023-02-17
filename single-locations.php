<?php

$link=get_field('link');

get_header();?>

<section class="page">
    <div class="container">
        <h1><?php the_title()?></h1>
        
<?php if($link):?>
    <a href="<?php echo $link['url']?>" target="_blank"><?php echo $link['title']?></a>
    <?php endif;?>

        <?php
        
        $args = [
            'post_type'=>'team-members',
            'meta_query'=>[
                'key'=>'locations',
                'value'=> '"'. get_the_ID() .'"',
                'compare'=>'LIKE'
            ]
            ];

        $team_members = get_posts($args);        
        ?>

        <?php foreach($team_members as $member):?>

            <a href="<?php echo get_permalink($member->ID)?>"><?php echo $member->post_title;?></a>
        <?php endforeach;?>

    </div>
</section>

<?php get_footer();?>