<?php get_header();?>

<section class="container-fluid servicos">
    <h2 class="font-weight-bold text-white text-center display-4">Serviços</h2>
   </section>

<main class="container my-3">
<div class="row py-3">
    <h2 class="font-weight-bold text-uppercase">Quem <span class="text-azulclaro">Somos</span></h2>
</div>
<div class="row ">
    <div class="col-12 col-lg-7">
            <p> Com 11 anos de tradição, estamos instalados no tradicional bairro da Mooca, proporcionando um tratamento
                individualizado
                para cada paciente, sempre com o mais alto nível de técnicas e qualidade na execução.
                Por ter sua origem como clínica familiar, a relação entre doutor e paciente é baseada tendo confiança como maior
                prioridade.
                Atualmente, o quadro clínico conta com 5 cirurgiões dentistas, abrangendo diversas áreas da odontologia.</p>
    </div>

    <div class="col-12 col-lg-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sala-da-clinica.jpg" class="d-block w-100" alt="Sala de entrada da clinica lugar tranquilo com sofa e tv para esperar o atendimento">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultorio2.jpg" class="d-block w-100" alt="Visão do consultorio so segundo consultorio com uma cadeira no meio da sala pronta com os equipamentos">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materiais-de-consultorio.png" class="d-block w-100" alt="Materias do dentistas">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultorio-de-lado.png" class="d-block w-100" alt="Sala do consultorio com equipamentos para ser atendido">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultorio-cadeira.jpg" class="d-block w-100"
                        alt="Sala do consultorio principal com equipamentos para ser atendido">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

</main>
<section class="container">



</section>

<?php get_footer();?>