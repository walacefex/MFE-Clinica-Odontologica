<?php get_header();?>

<section class="container-fluid banner">
    <div class="row mx-auto d-flex align-items-center">
        <div class="col-12 col-md-8">
            <h2 class="text-uppercase font-weight-light text-white ">nosso TIME DE <br>
            <span class="font-weight-bold" style="font-size: 37px">DENTISTAS <strong class="text-azulclaro">ESPECIALISTAS</strong></span></h2>
        </div>

        <div class="col-12 col-md-8">
            <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit sit amet id <br> animi dolor distinctio, ad et ullam ipsum laudantium corrupti nobis voluptates quo harum.</p>
        </div>
        <div class="col-md-12">
            <a href="#" class="btn btn-outline-azulclaro text-uppercase py-2 rounded mr-3">Marcar Consulta</a>
            <a href="#" class="text-white stretched-link text-uppercase">Conheça nosso time</a>
        </div>
    </div>
   </section>
   <!-- separador -->
<div class="row mx-auto separador"></div>
<section class="container my-3">
<div class="row
 py-3">
    <h2 class="font-weight-bold text-uppercase">Nossos <span class="text-azulclaro">Serviços</span></h2>
</div>
<div class="row mx-auto">
        <div class="fundo-azul-gradiente col-6 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/implantes.png" class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="Implates">
            <h3 class="text-white font-weight-bold h5">Implantes</h3>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facetas-elentes-ceramicas.png" class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="facetas e lentes cerâmicas">
            <h3 class="text-white font-weight-bold h5">Facetas e Lentes
            Cerâmicas</h3>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ortodontia.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="ortodontia">
            <h3 class="text-white font-weight-bold h5">Ortodontia</h3>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/endodontia.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="endodontia">
            <h3 class="text-white font-weight-bold h5">Endodontia</h3>
        </div>
<div class="w-100 d-none d-md-block"></div>
        <div  class="fundo-azul-gradiente col-6 col-md-3 mt-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fios-de-sustentacao.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="fios de sustentacao">
            <h3 class="text-white font-weight-bold h5">Fios de <br>
            sustentação</h3>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3 mt-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/botox.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="botox">
            <h3 class="text-white font-weight-bold h5">Botox</h3>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3 mt-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proteses.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="próteses">
            <h3 class="text-white font-weight-bold h5">Próteses</h3>
        </div>
        <div class="fundo-azul-gradiente col-6 col-md-3 mt-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cirurgia-bucomaxilofacial.png"  class="img-fluid py-lg-4 py-md-4 py-2 border-bottom" alt="cirurgia bucomaxilofacial">
            <h3 class="text-white font-weight-bold h5">cirurgia
            bucomaxilo<wbr>facial</h3>
        </div>
</div>
</section>
<section class="container-fluid bg-cinza">
    <div class="container">
        <div class="row py-3">
            <h2 class="font-weight-bold text-uppercase">Quem <span class="text-azulclaro">Somos</span></h2>
        </div>

        <div class="row py-3">
            <div class="col-12 col-md-6 col-lg-6">
                <h3 class="font-weight-bold">M. F. E. Clinicas Odontológicas</h3>
                <p>Com 11 anos de tradição, estamos instalados no tradicional bairro da Mooca, proporcionando um tratamento individualizado
                para cada paciente, sempre com o mais alto nível de técnicas e qualidade na execução.
                Por ter sua origem como clínica familiar, a relação entre doutor e paciente é baseada tendo confiança como maior
                prioridade. Atualmente, o quadro clínico conta com 5 cirurgiões dentistas, abrangendo diversas áreas da odontologia.</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultorio.png" alt="Consultório da clinica odontologia" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header agendar-consulta p-3">
                        <h4 class="text-white text-center text-uppercase">Agendar Consulta</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nome">Nome*</label>
                                <input type="text" class="form-control" id="nome" placeholder="Nome" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail*</label>
                                <input type="email" class="form-control" id="Email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone / Celular*</label>
                                <input type="tel" class="form-control" id="telefone" placeholder="Telefone" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Especialização</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Odontológicas</option>
                                    <option>Endodontia</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mensagem</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Opcional"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-lg bg-principal text-white text-uppercase" type="button">Agendar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<!-- USP -->
<section class="container">
    <div class="row py-3">
        <h2 class="font-weight-bold text-uppercase">Somos Credenciados <span class="text-azulclaro">Pela USP</span></h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem deserunt ipsum sint nihil natus soluta nemo facere. Similique, odit, molestias ducimus est libero fugiat sequi voluptatum repellendus, numquam dolores repudiandae.Cumque fugiat a quibusdam officia nostrum repellat ab rerum harum ullam, saepe corporis architecto adipisci provident odio excepturi consectetur tempore atque voluptatum iusto? Eius voluptatibus fuga nesciunt. Placeat, cumque nulla!</p>
        <button class="btn bg-azulclaro text-white text-center btn-lg">Agende uma Visita</button>
        </div>

        <div class="col-12 col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materiais-de-consultorio.png" alt="Materiais de consultorio desntista para estudantes da USP" class="img-fluid">
        </div>

</div>
</section>
<section class="container">
    <div class="row py-3">
        <h2 class="font-weight-bold text-uppercase">Nosso <span class="text-azulclaro">Time</span></h2>
    </div>
    <div class="row">

        <div class="col-md-3">
            <div class="card border-0">

              <div class="time"></div>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Dra Paulo</h5>
                <p class="card-text">Especialista</p>
              </div>
              <div class="card-footer bg-transparent border-0 text-center"><a href="#" class="btn btn-lg bg-principal text-white text-center">Agendar</a></div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card border-0">
              <div class="time"></div>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Dra Paulo</h5>
                <p class="card-text">Especialista</p>
              </div>
              <div class="card-footer bg-transparent border-0 text-center"><a href="#" class="btn btn-lg bg-principal text-white text-center">Agendar</a></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0">
              <div class="time"></div>
              <div class="card-body">
            <h5 class="card-title font-weight-bold">Dra Paulo</h5>
            <p class="card-text">Especialista</p>
              </div>
              <div class="card-footer bg-transparent border-0 text-center"><a href="#" class="btn btn-lg bg-principal text-white text-center">Agendar</a></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0">
              <div class="time"></div>
              <div class="card-body">
            <h5 class="card-title font-weight-bold">Dra Paulo</h5>
            <p class="card-text">Especialista</p>

              </div>
            <div class="card-footer bg-transparent border-0 text-center"><a href="#" class="btn btn-lg bg-principal text-white text-center">Agendar</a></div>
            </div>
        </div>

    </div>

</section>
<!-- comentário   -->
<section class="container-fluid comentario">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner d-flex">
            <div class="carousel-item carrosel estrutura-carrosel active">
            <div class="card text-center bg-transparent border-0">
                <div class="card-body ">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                        This content is a little bit longer.</p>

                </div>
                <h5 class="card-title">Card title</h5>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boy.png" class="card-img-top mx-auto comentario-img rounded-circle" alt="...">
            </div>
            </div>
            <div class="carousel-item carrosel estrutura-carrosel">
            <div class="card text-center bg-transparent border-0">
                <div class="card-body">

                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                        This content is a little bit longer.</p>

                </div>
                <h5 class="card-title">Card title</h5>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boy.png" class="card-img-top mx-auto comentario-img rounded-circle" alt="...">
            </div>
            </div>
            <div class="carousel-item carrosel estrutura-carrosel">
            <div class="card  text-center bg-transparent border-0">
                <div class="card-body">

                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                        This content is a little bit longer.</p>

                </div>
                <h5 class="card-title">Card title</h5>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boy.png" class="card-img-top mx-auto comentario-img rounded-circle" alt="...">
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="container my-3">
    <div class="row py-3">
        <h2 class="font-weight-bold text-uppercase">BLOG </h2>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi iure reiciendis architecto obcaecati sunt odio repellendus facere, quisquam expedita consectetur cumque, quam debitis, ipsam doloremque itaque ducimus rerum id fuga!</p>

    <article class="row mx-auto">
        <div class="col-md-4">
            <div class="card border-0" style="width: 18rem;">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/entrada-da-clinica.png" class="img-fluid card-img-top" alt="Entrada da Clinica">
  <div class="card-body">
    <h5 class="card-title font-weight-bold">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Leia Mais</a>
  </div>
</div>
        </div>
        <div class="col-md-4">
            <div class="card border-0" style="width: 18rem;">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/consultorio-de-lado.png" class="card-img-top img-fluid" alt="Consultorio odontologico">
  <div class="card-body">
    <h5 class="card-title font-weight-bold">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Leia Mais</a>
  </div>
</div>
        </div>
        <div class="col-md-4">
            <div class="card border-0" style="width: 18rem;">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/materiais-de-consultorio.png" class="img-fluid card-img-top" alt="materiais de consutlorio">
  <div class="card-body">
    <h5 class="card-title font-weight-bold">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Leia Mais</a>
  </div>
</div>
        </div>
    </article>

</section>
<!-- localização -->
<section class="container-fluid px-0 my-3">
    <div class="embed-responsive embed-responsive-4by3">
        <iframe  class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14629.226472070144!2d-46.5941818!3d-23.5574288!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x70c898e1243ee593!2sM.F.E+Cl%C3%ADnicas+Odontol%C3%B3gicas!5e0!3m2!1spt-BR!2sbr!4v1558372722193!5m2!1spt-BR!2sbr" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>
<section class="container-fluid contato">
<div class="row mx-auto text-center py-3 justify-content-center">
    <h2 class="text-white text-uppercase text-center font-weight-bold">Contato</h2>
</div>


<form class="py-3 w-75 mx-auto">
    <div class="form-group font-weight-bold">
        <label for="nome" class="text-white">Nome</label>
        <input type="text" class="form-control rounded" id="nome"  placeholder="Nome">
    </div>
    <div class="form-group font-weight-bold">
        <label for="exampleInputEmail1" class="text-white">Email</label>
        <input type="email" class="form-control rounded" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">
    </div>
    <div class="form-group font-weight-bold">
        <label for="telefone" class="text-white">Telefone</label>
        <input type="tel" class="form-control rounded" id="telefone" placeholder="Telefone">
    </div>
    <div class="form-group">
        <label for="mensagem" class="text-white font-weight-bold">Mensagem</label>
        <textarea class="form-control" id="mensagem" rows="3"></textarea>
    </div>
    <div class="row ml-auto">
         <button type="submit" class="btn bg-azulclaro text-white font-weight-bold">Enviar</button>
    </div>
</form>

</section>

<?php get_footer(); ?>