<footer>
         
       <div class="container-fluid footer">
           <div class="row">
               
               <div class="col-md-4">
                    <h5>Nasze wyróżnienia: <br></h5>
                    <a href="#">
                        <?php if ( is_active_sidebar('box5')) : ?>
                            <?php dynamic_sidebar('box5'); ?>
                        <?php endif; ?>
                    </a>
               </div>
               
               <div class="col-md-8">
                   <p class="lo"><?php bloginfo('description') ?></p>
                   <div class="row lr">
                       <div class="col-4 col-md-1 left">
                           <i class="fas fa-map-marker-alt"></i>
                       </div>
                       <div class="col-8 col-md-11 left1">
                           <?php if ( is_active_sidebar('box4')) : ?>
                                <?php dynamic_sidebar('box4'); ?>
                           <?php endif; ?>
                       </div>
                   </div>
                   <div class="border"></div>
                   <div class="left">
                        <?php if ( is_active_sidebar('box3')) : ?>
                            <?php dynamic_sidebar('box3'); ?>
                        <?php endif; ?>
                    </div>
               </div>
               
           </div>
         </div>
         
</footer>
  
<?php wp_footer(); ?>

  </body>
</html>



