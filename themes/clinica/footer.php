<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<footer class="container-fluid bg-dark">
<div class="row mx-auto py-4">
<div class="col-md-4 col-12">
    <h5 class="text-white font-weight-bold"> Informações de Contato</h5>
    <p class="text-white"> <i class="fas fa-map-marker-alt"></i> R. Antunes Maciel, 58 -
    Alto da Mooca,
    São Paulo - SP, 03182-010</p>
    <p class="text-white">
        <strong>E-mail:</strong>
       <a href="mailto:contato@mfeclinicasodontologicas.com.br">contato@mfeclinicasodontologicas.com.br</a>
    </p>
        <p class="text-white">
            <strong>Telefone:</strong>
            <a href="tel:+11 2308-3745">2308-3745</a>
        </p>
    <div class="row mx-auto">
        <p style="font-size:25px"><i class=" mr-3 fab fa-instagram text-white"></i></p>
        <p style="font-size:25px"><i class=" mr-3 fab fa-facebook-square text-white"></i></p>
        <p style="font-size:25px"><i class=" mr-3 fab fa-whatsapp text-white"></i></p>
    </div>
</div>
<div class="col-md-4 col-12">
    <h5 class="text-white font-weight-bold">Mapa do Site</h5>
    <?php echo wp_nav_menu() ?>
</div>
<div class="col-md-4 col-12">
    <h5 class="text-white font-weight-bold">Serviços</h5>
    <ul class="list-group bg-transparent border-0 text-white">
    <li class="list-group-item text-white bg-transparent border-0"><a class="col-12 text-left" href="#"> Implates </a> </li>
    <li class="list-group-item text-white bg-transparent border-0"><a class="col-12 text-left" href="#"> Facetas e lentes cerâmicas </a> </li>
    <li class="list-group-item text-white bg-transparent border-0"><a class="col-12 text-left" href="#"> Ortodontia</a></li>
    <li class="list-group-item text-white bg-transparent border-0"><a class="col-12 text-left" href="#"> Endodontia </a> </li>
    <li class="list-group-item text-white bg-transparent border-0"><a class="col-12 text-left" href="#"> Fios de sustentação </a> </li>
    <li class="list-group-item text-white bg-transparent border-0"><a class="col-12 text-left" href="#"> Botox </a> </li>
    <li class="list-group-item text-white bg-transparent border-0"><a class="col-12 text-left" href="#"> Proóteses </a> </li>
    <li class="list-group-item text-white bg-transparent border-0"><a class="col-12 text-left" href="#"> Cirurgia buxomaxilofacial </a> </li>
    </ul>

</div>
</div>
<hr class="text-white">
<p class="text-white text-center">2019© Digital Time - Todos os Direitos Reservados</p>
</footer>

	<?php wp_footer();?>
</body>
</html>
