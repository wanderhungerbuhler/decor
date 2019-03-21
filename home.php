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
    <section class="section-courses">
      <article class="courses">
        <div class="courses-desc">
          <span>Curso</span>
          <h1><?php the_title(); ?></h1>
          <p>
            <?php the_field('desc_course'); ?>
          </p>
          <ul class="list-tags">
            <li><a href="decor/login/" class="btn-comecar"><?php the_field('start_course'); ?></a></li>
            <?php if(have_rows('tags_course')) : while(have_rows('tags_course')) : the_row(); ?>
              <li><?php the_sub_field('info_course'); ?></li>
            <?php endwhile; else: endif; ?>
          </ul>
        </div>
      </article>
    </section>
  <?php endwhile; else: endif; ?>
  <?php wp_reset_query(); wp_reset_postdata(); ?>


<?php get_footer(); ?>