<?php 

/* Template Name: Content Page */

$image = get_field('featured_image');
$picture = $image['sizes']['my_custom_size'];

$file = get_field('upload_a_file');
$filename = $file['filename'];
$fileurl = $file['url'];

get_header();?>

<section class="page">
    <div class="container">
        <h1>
            <?php the_title();?>
        </h1>
        <?php if( have_posts()): while( have_posts())  : the_post();?>
        <?php the_content();?>
        <?php endwhile; else: endif;?>
        <?php if($image):?>
        <?php echo $image['alt'];?>
        <img src="<?php echo $picture;?>" class="img-fluid">
        <?php endif;?>
        <?php if($file):?>
            <a href="<?php echo $fileurl;?>" download=""><?php echo $filename;?></a>
        <?php endif;?>


    </div>
</section>

<?php get_footer();?>