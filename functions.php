<?php 


function pd_produtos_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );
    wp_enqueue_script( 'rellax-js', get_template_directory_uri() . '/js/rellax.js', array( 'jquery' ), '4.4.1', true );
    



		wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array('jquery'), filemtime(get_template_directory() . '/js/menu.js'), true);


	


	




	wp_enqueue_script( 'particles-js','https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js');
    wp_enqueue_script( 'jquery2','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'fa-js','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js');
	wp_enqueue_script( 'boot-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');
	 wp_enqueue_script( 'slick-carousel','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script( 'fancybox-js','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
		// wp_enqueue_script( 'pointer-js','/wp-content/themes/Arqosv2/js/pointer.js');

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '4.4.1', 'all' );

	wp_enqueue_style( 'galeria-css', get_template_directory_uri() . '/css/galeria.css', array(), '4.4.1', 'all' );



wp_enqueue_style('730-style-sass', get_template_directory_uri() . '/sass/style.css', array(), filemtime(get_template_directory() . '/sass/style.css'), false);


 	wp_enqueue_script( 'flickity-js','https://flickity.metafizzy.co/flickity.pkgd.min.js');
 	
 	 wp_enqueue_style( 'slick-css','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
 	// wp_enqueue_style( 'pointer-css','/wp-content/themes/Arqosv2/sass/pointer.css');
 	wp_enqueue_style( 'fancy-box-css','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
 	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.14.0/css/all.css');
 	


 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
 	


}
add_action( 'wp_enqueue_scripts', 'pd_produtos_scripts' );

add_theme_support('title-tag');



/* TT READING TIME 
// Calcula o tempo estimado de leitura do conteúdo
// @www.tutoriart.com.br/
*/
function tt_reading_time() {
 $content = get_field('introducao');
  $content2 = get_field('texto_de_postagem');
 $char_count = mb_strlen(strip_tags($content), "UTF-8");
 $char_count2 = mb_strlen(strip_tags($content2), "UTF-8");
  $char_count_Res =  $char_count + $char_count2;
 
 $min = ceil($char_count_Res / 850); // tempo médio de leitura: 1200 caracteres

// $tempo = 'Tempo estimado: ';
 if ($min <= 1) {
 $tempo .= '1 minuto';
 }
 else {
 $tempo .= $min . ' minutos';
 }
 // $tempo .= ' ('. $char_count .' caracteres)';
 return $tempo;
}
/* http://wordpress.stackexchange.com/a/39920/31885 */
function tt_reading_time_filter( $content ) {
 // $custom_content = '<div id="tt-temp-estim">'.tt_reading_time().'</div>';
 $custom_content .= $content;
 return $custom_content;
}
add_filter( 'the_content', 'tt_reading_time_filter' );










// Create custom post type
function create_posttype() {
    register_post_type( 'produtos',
        array(
            'labels' => array(
                'name' => __( 'Produtos' ),
                'singular_name' => __( 'Produto' ),
				'menu_name' => _x('Produtos', 'admin menu'),
				'name_admin_bar' => _x('Produtos', 'admin bar'),
				'add_new' => _x('Adicionar Produtos', 'add new'),
				'add_new_item' => __('Adicionar Novo'),
				'new_item' => __('Novo Produto'),
				'edit_item' => __('Editar Produto'),
				'view_item' => __('Ver Produto'),
				'all_items' => __('Todos os Produtos'),
				'search_items' => __('Procurar Produtos'),
				'not_found' => __('Nenhum produto encontrado'),                
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'produto'),
            'taxonomies'  => array( 'produtos-categoria' ,'produtos-destaque'),
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'create_posttype', 9 );

//Create category for specific post type
function tr_create_my_taxonomy() {
    register_taxonomy(
        'produtos-categoria',
        'produtos',
        array(
            'label' => __( 'Categoria' ),
            // CHANGED SLUG
            'rewrite' => array( 'slug' => 'produtos/categoria' ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'tr_create_my_taxonomy', 6 );


//Create category for specific post type
function tr_create_my_taxonomy2() {
    register_taxonomy(
        'produtos-destaque',
        'produtos',
        array(
            'label' => __( 'Destaque' ),
            // CHANGED SLUG
            'rewrite' => array( 'slug' => 'produtos/destaque' ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );
}
// ADDED PRIORITY
add_action( 'init', 'tr_create_my_taxonomy2', 7 );






add_action( 'wpcf7_init', 'custom_add_form_tag_customlist' );

function custom_add_form_tag_customlist() {
    wpcf7_add_form_tag( array( 'customlist', 'customlist*' ), 
'custom_customlist_form_tag_handler', true );
}

function custom_customlist_form_tag_handler( $tag ) {

    $tag = new WPCF7_FormTag( $tag );

    if ( empty( $tag->name ) ) {
        return '';
    }

    $customlist = '';

    $query = new WP_Query(array(
        'post_type' => 'produtos',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby'       => 'title',
        'order'         => 'ASC',
    ));

    while ($query->have_posts()) {
        $query->the_post();
        $post_title = get_the_title();
        $customlist .= sprintf( '<option value="%1$s">%2$s</option>', 
esc_html( $post_title ), esc_html( $post_title ) );
    }

    wp_reset_query();

    $customlist = sprintf(
        '<select name="%1$s" id="%2$s"><option value="">Empreendimentos</option>   %3$s </select> ', $tag->name,
    $tag->name . '-options',
        $customlist );

    return $customlist;
}

//use this tag in your form
//[customlist your-field-name]

// Method 1: Filter.
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyCDdhmRE3vWrr2dVQ2ADzR8-XGTmtW6uAQ';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyCDdhmRE3vWrr2dVQ2ADzR8-XGTmtW6uAQ');
}
add_action('acf/init', 'my_acf_init');


// Make WP recognise the extra query parameter
// function example_query_vars( $qvars ) {
//     $qvars[] = 'location';
//     return $qvars;
// }
// add_filter( 'query_vars', 'example_query_vars' );





function example_update_latlngs($post){
    $location = get_field("location", $post);
    if(isset($location)){
        update_post_meta($post, "longitude", $location["lng"]);
        update_post_meta($post, "latitude", $location["lat"]);
    }
}

add_action("save_post", "example_update_latlngs", 10, 3);