<!DOCTYPE html>
<html>

<style>

#colophon {
    background-color: #566357;
    padding-top: 50px;
    padding-bottom: 30px;
}
</style>

<?php
/**
 * jazz footer
 *
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package jazz-child
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>


</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">
                <?php dynamic_sidebar('footer-1'); ?>
 

                <div id="navbarNavDropDown" class="colloapse navbar-collapse">
                    <ui id="main-menu" class="navbar-nav ma-auto"></ui>
                </div>
            </div><!--  .col-md-4 -->

            <div class="col-md-4">
                <?php dynamic_sidebar('footer-2'); ?>
            </div><!--  .col-md-4 -->
            
            <div class="col-md-4">
                <?php dynamic_sidebar('footer-3'); ?>

            </div><!--  .col-md-4 -->
        </div><!--  .row -->
        <div class="site-info">
            &copy; <?php bloginfo('name');
            echo ' - ';
            echo date("Y"); ?>
        </div><!-- .site-info -->
    </div><!--  .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>