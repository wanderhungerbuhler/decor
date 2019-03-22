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