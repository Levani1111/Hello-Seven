<?php get_header(); ?>

<section class="page-wrap mb-5">
    <div class="container">
        <h1 class="title text-center py-5"><?php the_title(); ?></h1>
       <?php get_template_part('includes/section', 'content'); ?>
   </div>
</section>

<?php get_footer(); ?>