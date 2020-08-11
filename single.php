<?php get_header(); ?>
    
    <?php if ( get_header_image() ) : ?>
    <a href="http://1lo-lancut.pl">
            <div class="header-image h-100" style="background-image: url(<?php header_image(); ?>);"></div>
    </a>
    <?php endif; ?>
   
    <main>
       
       <section class="container-fluid">
                    <div class="row social">

                        <div class="col-6 col-sm-3 icon">
                           <a href="https://iuczniowie.progman.pl/lancut/login.aspx?ReturnUrl=%2flancut%2f">
                                <section>
                                    <i class="fas fa-laptop-code"></i>
                                    <p>e-Dziennik</p>
                                </section>
                            </a>
                        </div>

                        <div class="col-6 col-sm-3 icon">
                           <a href="http://1lo-lancut.pl/profile-klas/">
                                <section>
                                    <i class="fas fa-users"></i>
                                    <p>Profile klas</p>
                                </section>
                            </a>
                        </div>

                        <div class="col-6 col-sm-3 icon">
                           <a href="http://1lo-lancut.pl/sukcesy/">
                                <section>
                                    <i class="fas fa-award"></i>
                                    <p>Sukcesy</p>
                                </section>
                            </a>
                        </div>

                        <div class="col-6 col-sm-3 icon">
                           <a href="http://1lo-lancut.pl/aktualnosci/">
                                <section>
                                    <i class="fas fa-clipboard"></i>
                                    <p>Aktualności</p>
                                </section>
                            </a>
                        </div>

                    </div>

                </section>
            
         <article class="container-fluid">

                    <div class="row section1">

                        <div class="col-md-9">

                            <div class="social-info-content">
                                    <?php the_title('<h4 class="entry-title">', '</h4>' ); ?>
                            </div>

                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                    
                                       <div class="wpis">
                                            <div class="entry">
                                                <div class="wpis-img">
                                                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
                                                </div>
                                                
                                                <div class="entry-content">
                                                    <?php the_content() ?>
                                                </div>

                                            </div>
                                       </div>
                                    
                                    <?php endwhile; ?>
                                <?php endif; ?> 
                        
                            </div>

                            <div class="col-md-3 sidebar">
                            
                                <?php get_sidebar(); ?>
                           
                            </div>

                        </div>
                </article>
        
    </main>  
     
<?php get_footer();