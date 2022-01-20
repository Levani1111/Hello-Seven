<?php get_header ();?>

<div class="container py-2 mb-5"> 
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('includes/section', 'content'); ?>
</div>

<?php get_footer(); ?>