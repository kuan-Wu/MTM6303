<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mtm6303_final
 */

 echo "Test";

get_header(); ?>

<?php
while (have_posts()) : the_posts();
    
    get_template_part
    ('template-parts/page/content','page');

endwhile; 
?>


<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                <h1>Latest Posts</h1>
              </div>
            </div>
        </div>
     </div>
 </div>
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Post Title</h2>
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()?>/images/page.jpg"><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
      </div>
      <div class="col-md-6">
        <h2>Post Title 2</h2>
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()?>/images/page.jpg"><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
      </div>
      <div class="col-md-6">
        <h2>Post Title 3</h2>
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()?>/images/page.jpg"><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
      </div>
      <div class="col-md-6">
        <h2>Post Title 4</h2>
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()?>/images/page.jpg"><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
      </div>
    </div>
</div>
<?php get_footer(); ?>