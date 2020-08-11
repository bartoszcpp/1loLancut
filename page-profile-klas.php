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

                            <div class="social-info">Profile klas</div>
                            <section class="contact">
                            
                                <div class="d-lg-none d-xl-none d-md-none">
                                        
                                        <div class="row">

                                            <div class="col-4 icon">
                                                <a href="https://www.facebook.com/oficjalna.strona.ILO.Lancut/">
                                                    <section>
                                                        <i class="fab fa-facebook-f"  style="font-size:50px"></i>
                                                    </section>
                                                </a>
                                            </div>

                                            <div class="col-4 icon">
                                                <a href="https://instagram.com">
                                                    <section>
                                                        <i class="fab fa-instagram"  style="font-size:50px"></i>
                                                    </section>
                                                </a>
                                            </div>

                                            <div class="col-4 icon">
                                                <a href="https://www.youtube.com/channel/UCh0i0HFXtsi5SJX8M-3_STg">
                                                    <section>
                                                        <i class="fab fa-youtube" style="font-size:50px"></i>
                                                    </section>
                                                </a>
                                            </div>

                                        </div>
                                </div>
                            
                            <div class="row wpis-img">
                                    <div class="col-md-5">

                                        <?php if ( is_active_sidebar('box7')) : ?>
                                           <?php dynamic_sidebar('box7'); ?>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-md-7">

                                        <?php if ( is_active_sidebar('box8')) : ?>
                                                <?php dynamic_sidebar('box8'); ?>
                                        <?php endif; ?>

                                    </div>
                            </div>
                            
                            <div class="row wpis-img">
                                    <div class="col-md-5">

                                        <?php if ( is_active_sidebar('box9')) : ?>
                                           <?php dynamic_sidebar('box9'); ?>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-md-7">

                                        <?php if ( is_active_sidebar('box10')) : ?>
                                                <?php dynamic_sidebar('box10'); ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                
                                <div class="row wpis-img">
                                    <div class="col-md-5">

                                        <?php if ( is_active_sidebar('box17')) : ?>
                                           <?php dynamic_sidebar('box17'); ?>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-md-7">

                                        <?php if ( is_active_sidebar('box18')) : ?>
                                                <?php dynamic_sidebar('box18'); ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                
                                <div class="row wpis-img">
                                    <div class="col-md-5">

                                        <?php if ( is_active_sidebar('box19')) : ?>
                                           <?php dynamic_sidebar('box19'); ?>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-md-7">

                                        <?php if ( is_active_sidebar('box20')) : ?>
                                                <?php dynamic_sidebar('box20'); ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                
                                <div class="row wpis-img">
                                    <div class="col-md-5">

                                        <?php if ( is_active_sidebar('box21')) : ?>
                                           <?php dynamic_sidebar('box21'); ?>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-md-7">

                                        <?php if ( is_active_sidebar('box22')) : ?>
                                                <?php dynamic_sidebar('box22'); ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                
                                <div class="row wpis-img">
                                    <div class="col-md-5">

                                        <?php if ( is_active_sidebar('box23')) : ?>
                                           <?php dynamic_sidebar('box23'); ?>
                                        <?php endif; ?>

                                    </div>
                                    <div class="col-md-7">

                                        <?php if ( is_active_sidebar('box24')) : ?>
                                                <?php dynamic_sidebar('box24'); ?>
                                        <?php endif; ?>

                                    </div>
                                </div>

                            </section>
                                
                        </div>

                        <div class="col-md-3 sidebar">
                                
                                <aside class="sidebar-sticky">

                                    <div class="social-info">Dokumenty</div>

                                        <a href="https://www.powiatlancut.pl/"><img class="img-sidebar" src="<?php echo get_bloginfo('template_url') ?>/img/powiat1.png" class="img-fluid"/></a> 

                                        <a href="http://www.lancut.gada.pl/"><img class="img-sidebar" src="<?php echo get_bloginfo('template_url') ?>/img/gada.png" class="img-fluid"/></a>  
                                        
                                        <div class="d-none d-sm-none d-md-block">
                                        
                                            <div class="social-info">Media</div>
                                            <div class="row">

                                                <div class="col-4 icon">
                                                    <a href="https://www.facebook.com/oficjalna.strona.ILO.Lancut/">
                                                        <section>
                                                            <i class="fab fa-facebook-f"  style="font-size:50px"></i>
                                                        </section>
                                                    </a>
                                                </div>

                                                <div class="col-4 icon">
                                                    <a href="https://instagram.com">
                                                        <section>
                                                            <i class="fab fa-instagram"  style="font-size:50px"></i>
                                                        </section>
                                                    </a>
                                                </div>

                                                <div class="col-4 icon">
                                                    <a href="https://www.youtube.com/channel/UCh0i0HFXtsi5SJX8M-3_STg">
                                                        <section>
                                                            <i class="fab fa-youtube" style="font-size:50px"></i>
                                                        </section>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                </aside>

                                
                            </div>

                        </div>
                </article>
            
        
    </main>  
    
     
     <?php get_footer();
    

    
    
    
    
    
    
    
    