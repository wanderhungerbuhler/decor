<?php
// Template Name: Home 
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


  <?php 
    $args = array(
      'post_type' => 'cursos',
      'order' => 'ASC',
    );
    $the_query = new WP_QUERY ( $args );
  ?>  


  <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  
    <?php include(TEMPLATEPATH . "/inc/info-cursos.php"); ?>
    
  <?php endwhile; else: endif; ?>
  <?php wp_reset_query(); wp_reset_postdata(); ?>

<?php get_footer(); ?>