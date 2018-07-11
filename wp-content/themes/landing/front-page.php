
  <?php get_header(); ?>

    <?php get_template_part('carousel'); ?>

    <!-- Contenedor 1 -->
    <div class="row" id="Equipo">
      <div class="col-lg-8 mx-auto text-center px-5 pt-5">
        <h4>EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMÉRICA</h4>
        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</P>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/viewing-gallery-for-happy-people.png" width="400">
      </div>
    </div>
    <!-- Contenedor 2 -->
    <div class="jumbotron" id="Blog">
      <div class="col-lg-8 mx-auto text-center">
        <h4>EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMÉRICA</h4>
        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</P>
        <div class="my-4">
          <button type="button" class="btn btn-primary">Inscribete!</button>
        </div>
        <p>Vive la experiencia Desafio Latam!</p>
      </div>
    </div>

    <?php get_footer(); ?>
