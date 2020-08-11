<?php

function additional_css_scripts() {
     
    wp_enqueue_style( 'fontawesome',"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css");    
}
add_action( 'wp_enqueue_scripts', 'additional_css_scripts' );

wp_enqueue_style( 'style.css', get_stylesheet_uri(), array(), '2.1' ); // array to zaleznosci


//dodawanie skryptow:
function funkcja_dodawania_javascript() {
?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/sticky.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/animation.js"></script>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<?php


}
add_action('wp_footer', 'funkcja_dodawania_javascript');
//-------------

//rejestracja nawigacji nav
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
//------------

//rejestracja obrazka naglowkowego
add_theme_support( 'custom-header', array(
        //default image (empty to use none).
        'default-image'          => '',

        // Set height and width, with a maximum value for the width.
        'height'                 => 250,
        'width'                  => 960,
        'max-width'              => 2000,

        // Support flexible height and width.
        'flex-height'            => true,
        'flex-width'             => true,
        'uploads'       => true,
    ) );
//-------------------

/*
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Prawy Sidebar', 'theme-slug' ),
        'id' => 'sidebar-prawy',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
*/

//-------------------

//Rejestracja widgetow:
add_action( 'widgets_init', 'wpb_init_widgets' );
function wpb_init_widgets($id){
     
    register_sidebar( array(
        'name' => ( 'Bądz jednym z nas - obrazek' ),
        'id' => 'box1',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Bądz jednym z nas' ),
        'id' => 'box2',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Wykonanie' ),
        'id' => 'box3',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Adres-stopka' ),
        'id' => 'box4',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
     register_sidebar( array(
        'name' => ( 'Wyroznienia' ),
        'id' => 'box5',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Dokumenty' ),
        'id' => 'box6',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
      register_sidebar( array(
        'name' => ( 'Obrazek-profile klas1' ),
        'id' => 'box7',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Opis-profile klas1' ),
        'id' => 'box8',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
     register_sidebar( array(
        'name' => ( 'Obrazek-profile klas2' ),
        'id' => 'box9',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Opis-profile klas2' ),
        'id' => 'box10',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
     register_sidebar( array(
        'name' => ( 'Obrazek-profile klas3' ),
        'id' => 'box17',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Opis-profile klas3' ),
        'id' => 'box18',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
     register_sidebar( array(
        'name' => ( 'Obrazek-profile klas4' ),
        'id' => 'box19',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Opis-profile klas4' ),
        'id' => 'box20',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
     register_sidebar( array(
        'name' => ( 'Obrazek-profile klas5' ),
        'id' => 'box21',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Opis-profile klas5' ),
        'id' => 'box22',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
     register_sidebar( array(
        'name' => ( 'Obrazek-profile klas6' ),
        'id' => 'box23',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Opis-profile klas6' ),
        'id' => 'box24',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
     
    register_sidebar( array(
        'name' => ( 'Opis' ),
        'id' => 'box11',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Adres' ),
        'id' => 'box12',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name' => ( 'Telefon' ),
        'id' => 'box13',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Mail' ),
        'id' => 'box14',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Opis' ),
        'id' => 'box15',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' => ( 'Zdjecie' ),
        'id' => 'box16',
        'before_widget' => '<div class="box">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h3>',
	    'after_title'   => '</h3>',
    ) );
    
}
//-----------------

//Obsługa miniatury
add_theme_support('post-thumbnails');
//----------------------

//Pagination:
function fellowtuts_wpbs_pagination($pages = '', $range = 2) 
{  
 $showitems = ($range * 2) + 1;  
 global $paged;
 if(empty($paged)) $paged = 1;
 if($pages == '')
 {
 global $wp_query; 
 $pages = $wp_query->max_num_pages;
 
 if(!$pages)
 $pages = 1; 
 }   
 
 if(1 != $pages)
 {
     echo '<nav aria-label="Page navigation" role="navigation">';
        echo '<span class="sr-only">Page navigation</span>';
        echo '<ul class="pagination justify-content-center ft-wpbs">';
 
        echo '<li class="page-item disabled hidden-md-down d-none d-lg-block"><span class="page-link">Page '.$paged.' of '.$pages.'</span></li>';
 
 if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
 echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link(1).'" aria-label="First Page">&laquo;<span class="hidden-sm-down d-none d-md-block"> First</span></a></li>';
 
 if($paged > 1 && $showitems < $pages) 
 echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($paged - 1).'" aria-label="Previous Page">&lsaquo;<span class="hidden-sm-down d-none d-md-block"> Previous</span></a></li>';
 
 for ($i=1; $i <= $pages; $i++)
 {
     if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
 echo ($paged == $i)? '<li class="page-item active"><span class="page-link"><span class="sr-only">Current Page </span>'.$i.'</span></li>' : '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($i).'"><span class="sr-only">Page </span>'.$i.'</a></li>';
 }
 
 if ($paged < $pages && $showitems < $pages) 
 echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($paged + 1).'" aria-label="Next Page"><span class="hidden-sm-down d-none d-md-block">Next </span>&rsaquo;</a></li>';  
 
 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) 
 echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($pages).'" aria-label="Last Page"><span class="hidden-sm-down d-none d-md-block">Last </span>&raquo;</a></li>';
 
 echo '</ul>';
        echo '</nav>';
 }
}
//------------------------------
