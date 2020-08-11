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

                            <div class="social-info">Aktualności</div>
                                
                              <?php query_posts('cat=5&post_status=publish&posts_per_page=8&paged='. get_query_var('paged')); ?>
                                
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                    
                                       <div class="wpis">
                                            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                                       </div>
                                    
                                    <?php endwhile; ?>
                                <?php endif; ?> 
                                <?php fellowtuts_wpbs_pagination(); ?>
                        
                            </div>

                            <div class="col-md-3 sidebar">
                                
                                <?php get_sidebar(); ?>

                            </div>

                        </div>
                </article>
        
    </main>  
     
<?php get_footer();