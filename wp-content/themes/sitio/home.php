<?php get_header(); ?>

    <?php get_template_part('jumbotron'); ?>

    <!-- Noticias -->
    <div class="container mb-3">
      <div class="row">
        <?php query_posts('posts_per_page=3&cat=-2' ); ?> 
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <!-- Col-->
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>
        <!--/Col-->
      <?php endwhile; endif; ?>
      </div>
    </div>

<?php get_footer(); ?>    