<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @subpackage Eewee_Bootstrap_twitter
 * @since Eewee Bootstrap Twitter 0.1
 */

get_header(); ?>
<div class="row-fluid">

    <div id="primary" class="span12">
        <div id="content" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'page' ); ?>

                <?php endwhile; // end of the loop. ?>

        </div><!-- #content -->
    </div><!-- #primary -->
    
</div>
<?php get_footer(); ?>