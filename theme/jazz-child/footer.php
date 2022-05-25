<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title> Document </title>
</head>
<body>
	<div class="footer-container">
		<div class="footer">
			<div class="footer-heading footer-1"></div>
				<h2> About Us </h2>
        </div>
        <div class="footer">
			<div class="footer-heading footer-2"></div>
				<h2> Contact Us </h2>
                <a href ="#"> Support </a>
                <a href ="#"> Contact </a>
        </div>
        <div class="footer">
			<div class="footer-heading footer-3"></div>
				<h2> Social Media </h2>
                <a href ="#"> Facebook</a>
                <a href ="#"> Instragram</a>
        </div>
        <div class="footer-email-form">
            <h2> Join Our NewsLetter </h2>
            <input type="email" placeholder="Enter your email 
            address" id ="footer-email">
            <input type="submit" value="Sign Up"
            id="footer-email-btn">
        </div>
    </div>
</body>
</html>

<head>
    
<style>

#colophon {
    background-color: #ececec;
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