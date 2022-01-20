<?php
/* 
Template Name: Archives
*/
?>

<?php get_header(); ?>

<section class="page-wrap py-3">
    <div class="container">
            <?php 
                $loop = new WP_Query( array( 
                    'post_type' => 'projects', 
                    'posts_per_page' => 6,
                    'paged' => $paged
                    ) ); 
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    
            ?>
            <div class="card mb-2">
                <div class="card-body">
                     <h1><?php the_title(); ?></h1>
                     <?php the_excerpt(); ?>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="pagination py-1 mb-5">
             <?php next_posts_link( 'Next >>', $loop->max_num_pages ); ?>
             <?php previous_posts_link( ' << Previous' ); ?>
        </div>
     </div>
</section>


<?php get_footer(); ?>