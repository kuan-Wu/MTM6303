<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mtm6303_final
 * @since mtm6303_final 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
	while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/page/content', 'page' );
	endwhile; // End of the loop.
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">

 

  <title>Title page</title>  

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/main.a3f694c0.css"/>
</head>

<body>


<div class="">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
               <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()?>/images/page.jpg">
            </div>
        </div>
    </div>
</div>

<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <h1>Type something</h1>
                     </div>   
                        <p class="section-container-spacer">Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                            non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                            Turpis egestas pretium aenean pharetra magna ac. Id cursus metus aliquam eleifend mi. Odio tempor
                            orci dapibus ultrices in iaculis. Lacus luctus accumsan tortor posuere ac ut consequat semper.
                            Tincidunt ornare massa eget egestas purus viverra accumsan. Odio euismod lacinia at quis. Sit
                            amet nulla facilisi morbi. At varius vel pharetra vel turpis nunc eget lorem dolor. Feugiat vivamus
                            at augue eget. Feugiat nisl pretium fusce id velit ut. Venenatis tellus in metus vulputate eu
                            scelerisque felis imperdiet. Ut placerat orci nulla pellentesque. Laoreet suspendisse interdum
                            consectetur libero id.
                        </p>
               </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php get_footer();
