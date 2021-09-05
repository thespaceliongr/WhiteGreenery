 <?php
/**
 * Header file for WhiteGreenery WordPress theme.
 *
 * @link https://profiles.wordpress.org/thespaceliongrnet/
 *
 * @package WordPress
 * @subpackage WhiteGreenery
 * @since WhiteGreenery 1.0
 */

?>

<?php get_header();?>  
 
<div class="container pt-5 pd-5">
<div class="card mb-4">
<div class="card-body">
<div class="row">
<!--Right posts -->
<div class="colm1">
<h1><?php single_cat_title();?></h1> 

 <!--Jquery slideToggle start-->
 <div id="flip">Click to slide<br/> the panel down or up</div>
<div id="panel"><a href="https://www.thespaceliongr.net/"  target="_blank">The Space Lion Gr Net</a></div>


<script>
$(document).ready(function(){
	
$("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});       
</script>
 <!--Jquery slideToggle end-->
 
<!--Start the Loop.-->
<?php if (have_posts()) : while (have_posts()) : the_post();  ?></p>
 <?php the_content(); ?>    
<?php endwhile; endif;?><!-- End the loop.-->

</div>   
</div>
</div>
</div>	
</div>
<?php  get_footer(); ?>