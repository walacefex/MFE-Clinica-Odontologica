<?php get_header();?>

<?php
    $args = array(
        'post_type' => 'servico',
        'posts_per_page' => -1,
    );
    $posts = new WP_Query($args);
    while ($posts->have_posts()): $posts->the_post();

        echo get_the_title() . "<br/>"; // titulo do serviço
        echo get_the_content() . "<br/>"; // textinho do serviço
        echo get_the_post_thumbnail() . "<br/>"; // foto do servico
        echo get_the_permalink() . "<br/>"; // link do servico interno

    endwhile;
    wp_reset_query();
?>

<section class="container-fluid servicos">
    <h2 class="font-weight-bold text-white text-center display-4">Serviços</h2>
   </section>

<section class="container my-3">
<div class="row py-3">
    <h2 class="font-weight-bold text-uppercase">Nossos <span class="text-azulclaro">Serviços</span></h2>
</div>
<div class="row mx-auto">
        <div class="fundo-azul-gradiente col-6 col-md-3">
            <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/implantes.png" class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="Implates">
            <h3 class="text-white font-weight-bold h5">Implantes</h3>
            </a>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3">
             <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facetas-elentes-ceramicas.png" class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="facetas e lentes cerâmicas">
            <h3 class="text-white font-weight-bold h5">Facetas e Lentes
            Cerâmicas</h3>
            </a>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3">
            <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ortodontia.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="ortodontia">
            <h3 class="text-white font-weight-bold h5">Ortodontia</h3></a>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3"> <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/endodontia.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="endodontia">
            <h3 class="text-white font-weight-bold h5">Endodontia</h3></a>
        </div>
<div class="w-100 d-none d-md-block"></div>
        <div  class="fundo-azul-gradiente col-6 col-md-3 mt-2"> <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fios-de-sustentacao.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="fios de sustentacao">
            <h3 class="text-white font-weight-bold h5">Fios de <br>
            sustentação</h3> </a>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3 mt-2"> <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/botox.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="botox">
            <h3 class="text-white font-weight-bold h5">Botox</h3> </a>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3 mt-2"> <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proteses.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="próteses">
            <h3 class="text-white font-weight-bold h5">Próteses</h3> </a>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3 mt-2"> <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cirurgia-bucomaxilofacial.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="cirurgia bucomaxilofacial">
            <h3 class="text-white font-weight-bold h5">cirurgia
            bucomaxilo<wbr>facial</h3> </a>
        </div>
</div>
</section>

<?php
get_footer();
