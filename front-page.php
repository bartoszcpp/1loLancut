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

                <section class="section1">
                        <div class="col-12 row about"> 

                           <div class="col-lg-5 order-md-1 fus">
                               <div class="row">
                                   <div class="col-12 text1 my-auto">
                                       <?php if ( is_active_sidebar('box2')) : ?>
                                           <?php dynamic_sidebar('box2'); ?>
                                       <?php endif; ?>
                                   </div>
                               </div>
                            </div>

                            <div class="col-lg-7 order-md-2">

                                       <div class="hovereffect">
                                            <a href="#">
                                                <?php if ( is_active_sidebar('box1')) : ?>
                                                    <?php dynamic_sidebar('box1'); ?>
                                                <?php endif; ?>
                                            </a>
                                                <div class="overlay">
                                                    <a class="info" href="#">Galeria</a>
                                                </div>
                                        </div>

                            </div>

                        </div>
                </section>       

                <section class="join">
                    <div class="video-responsive">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/seVECCDnDo4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
            </section>

                <article class="container-fluid">

                    <div class="row section1">

                        <div class="col-md-9">

                            <div class="social-info">Aktualności</div>
                             
                                <?php query_posts('cat=5&post_status=publish&posts_per_page=4&paged='. get_query_var('paged')); ?>

                                <?php if( have_posts() ): 
                                    while ( have_posts() ) : the_post(); ?>
                                    
                                        <div class="wpis">
                                            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                                        </div>
                                       
                                    <?php endwhile; ?>
                                <?php endif; ?>
                    
                                <div class="button-info">
                                    <a href="http://1lo-lancut.pl/aktualnosci-2/"> 
                                        <button type="button" class="btn btn-success">Przejdź do aktualności</button>
                                    </a>
                                </div>
                                   
                            </div>
                                         
                            <div class="col-md-3 sidebar">
                                
                                <?php get_sidebar(); ?>
                                    
                            </div>

                        </div>
                </article>


    </main>  
     
     <?php get_footer();