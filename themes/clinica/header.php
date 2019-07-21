<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<body>
   <header class="container-fluid px-0">
    <div class="row mx-auto bg-principal">
            <div class="col-md-4">
                <a class="nav-link text-white ml-3" href="#">
                    <i class="fas fa-map-marker-alt"></i>
                    R. Atntunes Maciel, 58 - Alto da Mooca, São Paulo - SP, 03182-010
                </a>
            </div>
            <div class="ml-auto">
                <a class="nav-link 
                 text-white" href="mailto:contato@mfeclinicasodontologicas.com.br">
                    <i class="far fa-envelope"></i>
                    contato@<wbr>mfeclinicasodontologicas.com.br
                </a>
            </div>
        
        <a class="nav-link text-white" href="#">
            <i class="fab fa-facebook-square"></i>  
        </a>

        <a class="nav-link text-white" href="#">
            <i class="fab fa-instagram"></i>  
        </a>

        <a class="nav-link text-white" href="#">
            <i class="fab fa-whatsapp"></i>
        </a>

    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h1 class="text-principal font-weight-bold align-middle d-flex"><a class="navbar-brand" href="#"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-mfe-clinica-odontologica.png" class=" logo d-inline-block align-top"
                    alt="logo M.F.E. Clinicas Odontológicas"></a> <span class="titulo-logo">M.F.E. Clinicas
                        Odontológicas</span> </h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold border-right" href="#">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold border-right" href="#">Serviços</a>
                </li>
                 <li class="nav-item">
                     <a class="nav-link font-weight-bold border-right" href="#">Quem Somos</a>
                 </li>
                  <li class="nav-item">
                      <a class="nav-link font-weight-bold border-right" href="#">Dentistas</a>
                  </li>
                   <li class="nav-item">
                       <a class="nav-link font-weight-bold border-right" href="#">Blog</a>
                   </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold border-right" href="#">Contato</a>
                    </li>             
            </ul>
           <a href="#" title="Agende a sua consulta" class="text-principal text-decoration-none"> <div class="media border-bottom">
                <i class="fas fa-mobile-alt" style="font-size: 45px; padding-top: 19px;"></i>
                <div class="media-body ml-1">
                    <p class="agende">
                        Agende a sua consulta
                       <span class="font-weight-bold" style="font-size: 20px;">(11) 97563-3745</span>
                    </p>
                </div>
            </div></a>
        </div>
    </nav>
   </header>