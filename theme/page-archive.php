<?php
/* 
Template Name: Archives
*/
?>

<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
            <h1 class="title text-center py-5"><?php the_title(); ?></h1>
            <?php 
                $args = new WP_Query( array( 
                    'post_type' => 'projects', 
                    'posts_per_page' => 6,
                    'paged' => get_query_var( 'paged' ),
                    'post_status' => 'publish'
                    ) ); 
                    while ( $args->have_posts() ) : $args->the_post(); 
            ?>
            <div class="card mb-2">
                <div class="card-body">
                     <h1><?php the_title(); ?></h1>
                     <?php the_excerpt(); ?>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="pagination py-1 mb-5">
            <div class="nav-previous alignleft">
                <?php previous_posts_link( 'Previous' ); ?>
            </div>&nbsp;&nbsp;
            <div class="nav-next alignright">
                 <?php next_posts_link( 'Next',  $args->max_num_pages   ); ?>
            </div>
        </div>
     </div>
</section>


<?php get_footer(); ?>