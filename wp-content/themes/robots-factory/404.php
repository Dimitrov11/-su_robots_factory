<?php get_header(); ?>

<section id="product" <?php post_class( 'product' ) ?>>
    <div class="container section-bg">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box">
                    <h2 class="title"><?php _e( 'Sorry, no posts found', 'softuni' ) ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="boxed">
                <div class="col-sm-12">
                    <div class="p-large" style="text-align:center; padding-bottom: 40px;">
                        <?php _e( 'Please, check later.', 'softuni' ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>