<?php
/**
 * Default Post Template
 *
 * @package WordPress
 * @subpackage Bootpresswp
 * @since Bootpresswp 0.1
 *
 * Last Revised: May 14, 2015
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(function_exists('bootpresswp_breadcrumbs')) bootpresswp_breadcrumbs(); ?>
                    <h1><?php the_title();?></h1>
                    <p class="meta"><?php echo bootpresswp_posted_on();?></p>
                    <?php the_content();?>
                    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
                    <?php wp_link_pages( array(
	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
	'after'       => '</div>',
	'link_before' => '<span>',
	'link_after'  => '</span>',
	) );
?>
                    <?php endwhile; // end of the loop. ?>
                    <?php comments_template(); ?>
                    <?php bootpresswp_content_nav('nav-below');?>
                </div>              
                <div class="col-md-4"><?php get_sidebar(); ?></div>
            </div>         
        </div> <!-- /container -->
<?php get_footer(); ?>