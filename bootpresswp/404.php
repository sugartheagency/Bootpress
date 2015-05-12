<?php
/**
 * Template for 404 Page
 *
 * @package WordPress
 * @subpackage Anompress
 * @since Bootpress 0.1
 *
 * Last Revised: May 08, 2015
 */
get_header(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(function_exists('bootpress_breadcrumbs')) bootpress_breadcrumbs(); ?>
                    <div class="jumbotron">
                      <h1><?php _e( 'This is 404 page', 'bootpress' ); ?></h1>
                      <p><?php _e( 'Try searching, or one of the links below could help.', 'bootpress' ); ?></p>
                      <p><a class="btn btn-primary btn-lg" role="button" href="<?php echo home_url( '/' ); ?>">Return to Home</a></p>
                    </div>
                    <div class="well">
                        <div class="row">
                            <div class="col-md-4"><?php get_search_form(); ?></div>
                            <div class="col-md-4"><?php the_widget( 'WP_Widget_Recent_Posts' ); ?></div>
                            <div class="col-md-4">
                                <h2><?php _e( 'Categories', 'bootpress' ); ?></h2>
                                <ul>
                                    <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>              
                <div class="col-md-4"><?php get_sidebar(); ?></div>
            </div>         
        </div> <!-- /container -->
<?php get_footer(); ?>