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
                <h4 class="widget-title">pages</h4>

                <div id="navbarNavDropDown" class="colloapse navbar-collapse">
                    <ui id="main-menu" class="navbar-nav ma-auto"></ui>
                </div>

            </div><!--  .col-md-4 -->
            <div class="col-md-4">
                <?php dynamic_sidebar('footer-2'); ?>
                <h4 class="widget-title">pages</h4>
                <p>
                    <a href="" title="test">test</a>
                    <a href="" title="test">test1</a>
                    <a href="" title="test">test2</a>
                </p>
            </div><!--  .col-md-4 -->
            <div class="col-md-4">
                <?php dynamic_sidebar('footer-3'); ?>
                <h4 class="widget-title">pages</h4>
                <p>
                    <a href="" title="test">test</a>
                    <a href="" title="test">test1</a>
                    <a href="" title="test">test2</a>
                </p>
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