<?php
// Template Name: Single Cursos
get_header(); 
?>

<style>
  .courses{
    background: url('<?php the_field("background_courses"); ?>') no-repeat center center; 
    background-size:cover;  
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
</style>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <?php include(TEMPLATEPATH . "/inc/info-cursos.php"); ?>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>