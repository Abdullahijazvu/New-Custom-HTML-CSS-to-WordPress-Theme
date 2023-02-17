<!-- <?php

function twenty_hello_world(){
    echo 'hello world'
}

add_action('widgets_init', 'twenty_hello_world', 20)

function twenty_hello_world_1(){
    echo 'l jS F Y'
}

add_action('widgets_init', 'twenty_hello_world_1', 10)
//10 is by default

if(! function_exists('twenty_hello_world2')){

    function twenty_hello_world(){

    echo "hello I'm not exist"

}
}
add_action('widgets_init', 'twenty_hello_world2', 30)

echo apply_filters('rec_new_filter','<p>Latest posts</p>')

function rec_new_heading(){
    '<h3>this is filter hook</h3>'
}
add_filter('rec_new_filter', 'rec_new_heading')
?>
<?php
//Loops


if(have_posts()) : while ( have_posts()) : the_post(); ?>

<article id="<?php the_ID()?>" <?php post_class(); ?> >

    <?php if(has_post_thumbnail()){?>
        <h2><?php the_title()?></h2>
        <section class="thumbnail alignleft">
            <?php the_post_thumbnail('medium')?>
        </section>
        <section class="entry-content alignleft">
            <?php the_content()?>
        </section>
        
        <?php}

        else{?>

        <h2 class="entry_title"><?php the_title()?></h2>
                
        <section class="entry_content">
        <?php the_content() ; ?>
        </section>
        <?php }?>
            </article>

        <?php endwhile() : endif(): 

//nonstandard loop

function recc_get_post(){

    if(is_page()){

    $args = array(
        'parent' => 0,
        'sord_order' => ASC,
        'sort_column' => 'menu_order'
    );
    $my_pages = get_pages($args)

    if($my_pages){

    echo '<ul class="pagelist">'

        foreach($my_pages as mypage)
        {
            echo '<li><a href="' .get_page_link($mypage->ID) .'">' . $mypage->post_title .'</a></li>';
        }
    echo '</ul>'

}

}
}

add_action('compass_after_content','recc_get_post')

$args = array(
    'posts_per_page' => 5
);
$mypost = get_post($args)

if($mypost){

    $message= "hello everybody"

    echo'<ul class="posts">'
    foreach ($mypost as $mposts){

        $mypostsID = $mypost->ID
        $mood = get_post_meta($mypostsID, 'mood', true)
        $date = get_the_date('l jS F Y', $mypostsID)

        echo'<li>'.$message.', I wrote this post on '.$date.' and I was feeling '.$mood.'.</li>'
    }
    echo '</ul>'
}

?>

<?php

$title = get_field('page_title');
$description = get_field('description');
$other = get_field('other');
$my_input = get_field('my_input');
$email = get_field('email')

?>
<?php if($title)?>

<p><?php echo ($title)?></p>

<?php endif?>
<?php if($description)?>

<p><?php echo nl2br($description)?></p>

<?php endif?>

<?php if($other)?>

<p><?php echo $other ;?></p>

<?php endif;?>

<?php if($my_input)?>

<p><?php echo ((int)$my_input) ;?></p>

<?php endif;?>
<?php if($email)?>

<a href="mailto:<?php echo $email ;?>"><?php echo $email ;?></a>

<?php endif;?> -->