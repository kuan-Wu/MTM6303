<?php 
    require_once "includes/session_include.php";
    
    
    // Including the header
    $_SESSION["page_title"] = "About Page";
    $_SESSION["current_page"] = "about";
    include "includes/header.php";
   
?>

<?php
    print_r($_SESSION);
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

<link href="./assets/css/main.a3f694c0.css" rel="stylesheet"></head>

<body>


<div class="">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
               <img class="img-responsive" src="./assets/images/img-01.jpg">
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

                    <div class="row section-container-spacer">
                        <div class="col-md-6">
                            <img class="img-responsive" src="./assets/images/img-03.jpg">
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src="./assets/images/img-02.jpg">
                        </div>
                    </div>

               </div>
               
                <div class="col-xs-12 col-md-8 col-md-offset-2">
              
                        <p>
                            Non blandit massa enim nec dui nunc mattis enim ut. Cursus in hac habitasse platea dictumst quisque sagittis
                            purus Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum
                            dolor sit amet consectetur adipiscing elit. Integer quis auctor elit sed. In pellentesque massa
                            placerat duis ultricies. Interdum consectetur libero id faucibus nisl tincidunt. Condimentum
                            mattis pellentesque id nibh tortor id aliquet</p>
                            <small class="signature pull-right">Team</small>
                </div>
            </div>




        </div>

    </div>



</div>

</body>

</html>


<?php 
    // Including the footer
    include "includes/footer.php";

?>