<?php get_header();?>
<section class="container-fluid contato">
    <h2 class="font-weight-bold text-white text-center display-4"> Contato</h2>
   </section>

<main class="container my-3">
<div class="row py-3">
    <h2 class="font-weight-bold text-uppercase">Entre em <span class="text-azulclaro">Contato</span></h2>
</div>
<div class="row mx-auto">
        <div class="col-12 col-lg-6 my-2">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14629.226472070144!2d-46.5941818!3d-23.5574288!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x70c898e1243ee593!2sM.F.E+Cl%C3%ADnicas+Odontol%C3%B3gicas!5e0!3m2!1spt-BR!2sbr!4v1558372722193!5m2!1spt-BR!2sbr"
                    width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-lg-6 my-2">
            <div class="card">
                <div class="card-header agendar-consulta p-3">
                    <h4 class="text-white text-center text-uppercase">Agendar Consulta</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="nome">Nome*</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail*</label>
                            <input type="email" class="form-control" id="Email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone / Celular*</label>
                            <input type="tel" class="form-control" id="telefone" placeholder="Telefone" required="">
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
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Opcional"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-lg bg-principal text-white text-uppercase"
                                type="button">Agendar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
</div>
</main>
<?php get_footer();?>