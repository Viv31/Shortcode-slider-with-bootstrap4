<?php 
/***
* Plugin Name: Shortcode slider BS
* Plugin URI:
* Description:
* Version:1.0
* Author: Vaibhav Gangrade
*/

function vg_shortcode_sliderBS(){
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    /*width: 100%;
    height: 100%;*/
  }
  </style>

  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo plugins_url('',__FILE__).'/taj2.jpg'?>" alt="Taj" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo plugins_url('',__FILE__).'/colle.jpg'?>" alt="Collesum" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo plugins_url('',__FILE__).'/liberty.jpg'?>" alt="Liberty" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

  
<?php
}
add_shortcode('BSShortSlider','vg_shortcode_sliderBS');



?>