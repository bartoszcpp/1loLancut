<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description')?>">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans|Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    
    <?php wp_head(); ?>
  </head>
  
  <body <?php body_class(); ?>>
   
       <div class="title">
            <a href="http://1lo-lancut.pl">
                <section>

                    <div class="container-fluid text-center">
                        <div class="row align-items-center">

                            <div class="col-5 col-md-3 logo">
                                <img src="<?php echo get_bloginfo('template_url') ?>/img/heniorzel.png" class="img-fluid"/>
                            </div>

                            <div class="col-7 col-md-9 napis">
                                <h1>I LICEUM OGÓLNOKSZTAŁCĄCE</h1>
                                <h2>IM. HENRYKA SIENKIEWICZA W ŁAŃCUCIE</h2>
                            </div>

                        </div>
                    </div>

                </section>
            </a>
      </div>
   
    <header>
       
        <nav class="navbar navbar-dark bg-jasny navbar-expand-md" data-toggle="sticky-onscroll">
          
            <a class="navbar-brand d-md-none d-lg-none d-xl-none" href="http://1lo-lancut.pl">Strona główna</a>
             
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
                 <span class="navbar-toggler-icon"></span>
             </button>
              
              <div class="collapse navbar-collapse order-3 order-md-3" id="mainmenu">
               
                  <ul class="nav navbar-nav">
                     
                      <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => '',
                                'container_id'      => 'collapse navbar-collapse',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            ) );
                      ?>
                      
                  </ul>
                  
              </div>
             
          </nav>
          
          </div>
      </header>
  
    
     
     
     
      

	
     
      