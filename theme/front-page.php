<?php get_header ();?>

<div class="container mb-5"> 
    <h1 class="title text-center py-5"><?php the_title(); ?></h1>
    <?php get_template_part('includes/section', 'content'); ?>
</div>

<?php get_footer(); ?>