
<?php
	/**
    * When “front page” is set in the front page displays section.
	*
	* @package hellopress
	* @since 0.1.0
	*/
?>

<?php get_header(); ?>

    <div class="col-md-8 ">
        <section class="section section-padding">
            <?php
                while ( have_posts() ) : the_post(); ?>
                <div class="short-info">
                    <?php the_content(); ?>
                </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>
        </section>
    </div>

    <div class="col-md-4" id="sidebar">
        <?php get_sidebar( 'primary' );; ?>
    </div>

<?php get_footer(); ?>