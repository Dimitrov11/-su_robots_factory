<?php get_header(); ?>

<!-- Register a custom Query -->
<?php
$robots_archive_args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'paged'          => get_query_var( 'paged' ),
);

$robots_archive_query = new WP_Query( $robots_archive_args );
?>

<?php if ( $robots_archive_query->have_posts() ) : ?>
    
    <section id="product" <?php post_class('product') ?>>
        <div class="container section-bg">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box">
                        <h2 class="title"><?php the_archive_title(); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php while ( $robots_archive_query->have_posts() ) : $robots_archive_query->the_post(); ?>
                    <div class="col-sm-4">
                        <div class="porduct-box">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img class="img-responsive" src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/default-robot.jpg" alt="product">
                            <?php endif; ?>

                            <h3 class="product-title"><?php the_title(); ?></h3>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>

        <div style="text-align:center; font-size: x-large">
            <?php posts_nav_link( ' - ', '< Previous Page', 'Next Page >' ); ?>
        </div>

    </section>


<?php endif; ?>

<!-- Mandatory - reset data if use custom query -->
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>