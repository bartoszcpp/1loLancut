    <aside class="sidebar-sticky">

        <div class="social-info">Dokumenty</div>

            <a href="https://www.powiatlancut.pl/"><img class="img-sidebar" src="<?php echo get_bloginfo('template_url') ?>/img/powiat1.png" class="img-fluid"/></a> 

            <a href="http://www.lancut.gada.pl/"><img class="img-sidebar" src="<?php echo get_bloginfo('template_url') ?>/img/gada.png" class="img-fluid"/></a>  
            
             <a href="#">
                 <?php if ( is_active_sidebar('box6')) : ?>
                     <?php dynamic_sidebar('box6'); ?>
                 <?php endif; ?>
             </a> 

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

    </aside>
