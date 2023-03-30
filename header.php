<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11" /> -->
	
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50"> 


<nav class="navbar navbar-expand-lg fixed-top menu-principal">
  <div class="container">
    <a class="navbar-brand" href="<?php echo site_url(); ?>">
		<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 261 80.29"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#ffcf01;}</style></defs><g id="Camada_2" data-name="Camada 2"><g id="Layer_1" data-name="Layer 1"><ellipse class="cls-1" cx="123.85" cy="31.39" rx="26.8" ry="26.04"/><path class="cls-2" d="M124,0a30.81,30.81,0,1,0,30.81,30.8A30.8,30.8,0,0,0,124,0Zm6.34,40.34L117.77,56.66l.53-22.5L102.09,18.53l20.44,2.74L143,24Z"/><rect class="cls-1" x="0.63" y="69.47" width="1.39" height="10.75"/><polygon class="cls-1" points="14 69.47 14 78.13 7.42 69.47 6.03 69.47 6.03 80.22 7.34 80.22 7.34 71.49 13.92 80.22 15.31 80.22 15.31 69.47 14 69.47"/><path class="cls-1" d="M27.21,79.84a9.67,9.67,0,0,1-3,.45c-3.76,0-5.64-1.86-5.64-5.6q0-5.3,5.64-5.29a9.67,9.67,0,0,1,3,.45v1.2a8,8,0,0,0-2.85-.52q-4.39,0-4.4,4.16,0,4.49,4.4,4.48a8,8,0,0,0,2.85-.53Z"/><path class="cls-1" d="M35.76,79.17q3.84,0,3.84-4.35c0-2.86-1.28-4.3-3.84-4.3s-3.93,1.44-3.93,4.3,1.31,4.35,3.93,4.35m-5.4-4.31q0-5.46,5.4-5.46t5.31,5.46q0,5.43-5.31,5.43t-5.4-5.43"/><path class="cls-1" d="M44.48,80.22V69.47h4.59q3.06,0,3.06,2.58,0,2.1-3,3.1l3.69,5.07H51l-3.42-4.83v-.91c2-.33,3.08-1.12,3.08-2.37,0-1-.57-1.49-1.71-1.49H45.87v9.6Z"/><path class="cls-1" d="M55.52,80.22V69.47h4.36q3.28,0,3.29,2.88,0,3.14-4.5,3.83L58.38,75c2.21-.32,3.31-1.19,3.31-2.59,0-1.19-.65-1.79-1.94-1.79H56.91v9.6Z"/><path class="cls-1" d="M71.26,79.17q3.85,0,3.85-4.35c0-2.86-1.28-4.3-3.85-4.3s-3.93,1.44-3.93,4.3,1.31,4.35,3.93,4.35m-5.39-4.31q0-5.46,5.39-5.46t5.31,5.46q0,5.43-5.31,5.43t-5.39-5.43"/><path class="cls-1" d="M80,80.22V69.47h4.58c2,0,3.07.86,3.07,2.58,0,1.4-1,2.43-3,3.1l3.69,5.07H86.49l-3.42-4.83v-.91c2.06-.33,3.08-1.12,3.08-2.37,0-1-.57-1.49-1.71-1.49H81.37v9.6Z"/><polygon class="cls-1" points="94.5 69.47 89.93 80.22 91.38 80.22 95.22 70.84 97.22 75.71 94.52 75.71 94.13 76.84 97.69 76.84 99.08 80.22 100.62 80.22 96.03 69.47 94.5 69.47"/><path class="cls-1" d="M107.22,79.09c2.64,0,4-1.51,4-4.54,0-2.63-1.31-4-4-4h-2.51v8.49Zm-3.9,1.13V69.47h3.9c3.56,0,5.34,1.7,5.34,5.08q0,5.67-5.34,5.67Z"/><path class="cls-1" d="M120.84,79.17q3.85,0,3.85-4.35c0-2.86-1.28-4.3-3.85-4.3s-3.93,1.44-3.93,4.3,1.31,4.35,3.93,4.35m-5.4-4.31q0-5.46,5.4-5.46t5.31,5.46q0,5.43-5.31,5.43t-5.4-5.43"/><path class="cls-1" d="M129.56,80.22V69.47h4.59q3.06,0,3.06,2.58,0,2.1-3,3.1l3.68,5.07h-1.83l-3.42-4.83v-.91c2.06-.33,3.08-1.12,3.08-2.37,0-1-.57-1.49-1.71-1.49H131v9.6Z"/><polygon class="cls-1" points="144.07 69.47 139.51 80.22 140.96 80.22 144.79 70.84 146.8 75.71 144.1 75.71 143.71 76.84 147.27 76.84 148.66 80.22 150.2 80.22 145.61 69.47 144.07 69.47"/><path class="cls-1" d="M161.79,79.09q3.94,0,4-4.54,0-3.94-4-4h-2.52v8.49Zm-3.91,1.13V69.47h3.91c3.56,0,5.34,1.7,5.34,5.08q0,5.67-5.34,5.67Z"/><polygon class="cls-1" points="170.39 69.47 170.39 80.22 177.53 80.22 177.53 79.09 171.78 79.09 171.78 75.33 177.15 75.33 177.15 74.2 171.78 74.2 171.78 70.6 177.41 70.6 177.41 69.47 170.39 69.47"/><polygon class="cls-1" points="194 69.47 190.16 78.77 186.23 69.47 184.76 69.47 189.34 80.22 190.88 80.22 195.45 69.47 194 69.47"/><polygon class="cls-1" points="200.49 69.47 195.93 80.22 197.37 80.22 201.21 70.84 203.22 75.71 200.51 75.71 200.13 76.84 203.68 76.84 205.07 80.22 206.61 80.22 202.03 69.47 200.49 69.47"/><polygon class="cls-1" points="209.31 69.47 209.31 80.22 216.32 80.22 216.32 79.09 210.7 79.09 210.7 69.47 209.31 69.47"/><path class="cls-1" d="M223.1,79.17c2.56,0,3.85-1.45,3.85-4.35s-1.29-4.3-3.85-4.3-3.93,1.44-3.93,4.3,1.31,4.35,3.93,4.35m-5.4-4.31q0-5.46,5.4-5.46t5.31,5.46q0,5.43-5.31,5.43t-5.4-5.43"/><path class="cls-1" d="M231.82,80.22V69.47h4.59q3.06,0,3.06,2.58,0,2.1-3,3.1l3.69,5.07h-1.83l-3.42-4.83v-.91c2.05-.33,3.08-1.12,3.08-2.37,0-1-.57-1.49-1.71-1.49h-3.07v9.6Z"/><polygon class="cls-1" points="242.86 69.47 242.86 80.22 250 80.22 250 79.09 244.25 79.09 244.25 75.33 249.63 75.33 249.63 74.2 244.25 74.2 244.25 70.6 249.89 70.6 249.89 69.47 242.86 69.47"/><path class="cls-1" d="M253.18,79.84V78.57a10.89,10.89,0,0,0,3.66.6c1.85,0,2.77-.68,2.77-2,0-1.16-.68-1.73-2-1.73h-1.39q-3.37,0-3.37-2.93t4.32-3.08a12.92,12.92,0,0,1,3.49.45v1.28a9.7,9.7,0,0,0-3.49-.6c-1.95,0-2.93.65-2.93,2,0,1.15.66,1.73,2,1.73h1.39c2.28,0,3.43,1,3.43,2.93s-1.39,3.15-4.16,3.15a14.23,14.23,0,0,1-3.66-.45"/><path class="cls-1" d="M235.42,39.84l15.91,20.23h9.22L240.17,34.13c-1.44,1.81-3.32,4-4.75,5.71"/><polygon class="cls-1" points="251.33 1.45 232.89 24.9 214.44 1.45 205.22 1.45 228.3 30.76 205.22 60.06 214.44 60.06 260.55 1.45 251.33 1.45"/><polygon class="cls-1" points="198.57 1.45 180.13 24.9 161.68 1.45 152.46 1.45 175.54 30.76 152.46 60.06 161.68 60.06 207.79 1.45 198.57 1.45"/><polygon class="cls-1" points="187.41 34.13 182.73 39.93 198.57 60.06 207.79 60.06 187.41 34.13"/><path class="cls-1" d="M41.73,17.15q0-15.7-18-15.7H0V60.07H7.58V7.72h15.5q10.58,0,10.57,9.76,0,11.3-17.49,14.05L12,32.18l0,6.59s2.22-.2,3.41-.29a21,21,0,0,0,3.3-.48c15.11-2.75,23.08-9.9,23.08-20.85"/><path class="cls-1" d="M82.23,60.07h10L72.11,32.44Q88.46,27,88.46,15.51q0-14.06-16.72-14.06h-25V60.07h7.59V7.72H71q9.34,0,9.35,8.12,0,10.08-16.3,12.82l-5.39.75h-.12v6.5l6.07-.69Z"/></g></g></svg>    	
    </a>
    <div class="sino" id="mob">

      <div class="ball-not text-center">  
          <p><?php 
    echo wp_count_posts()->publish; 
?></p>
      </div>  
      <i class="fa-solid fa-bell"></i>
    </div>    
      <div class="nav-item hamb toggle-menu" id="mob" onclick="$('.produtos2').slick('slickGoTo', 0);">
        <div class="bars">  
          <div class="barra"> </div>
          <div class="barra"></div>
          <div class="barra"></div>
        </div>
        
      </div>      
   <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <div class="bars">  
        <div class="barra"> </div>
        <div class="barra"></div>
        <div class="barra"></div>
      </div>
    </button>-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="<?php echo site_url(); ?>/empreendimentos/">Imóveis </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo site_url(); ?>/sobre/">Próxx</a>
        </li>      
        <li class="nav-item">
          <a class="nav-link disabled" aria-current="page" href="#">Blog</a>
        </li>          
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo site_url(); ?>/contato/">Fale Conosco</a>
        </li> 
        <li class="nav-item icon icon1">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/profile-user.png" alt="" class="img-fluid icon-prof">
          <a class="nav-link active" aria-current="page" href="#">portal do cliente</a>
        </li>         
        <li class="nav-item icon">
        	<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/profile-user.png" alt="" class="img-fluid icon-prof">
         	<a class="nav-link active" aria-current="page" href="#">parcerias e corretores</a>
        </li> 
        <li class="nav-item" id="desk">
          <!--<a class="nav-link active" aria-current="page" href="#">-->
          <div class="sino">

            <div class="ball-not text-center">  
                <p><?php 
    echo wp_count_posts()->publish; 
?></p>
            </div>  
            <i class="fa-solid fa-bell"></i>
          </div>

        </li>  
        <li class="nav-item hamb toggle-menu" id="desk" onclick="$('.produtos2').slick('slickGoTo', 0);">
        	<div class="bars">	
        		<div class="barra">	</div>
        		<div class="barra"></div>
        		<div class="barra"></div>
        	</div>
        	<p class="menu-t">	menu</p>	
        </li>                           
 
      </ul>

    </div>
  </div>
</nav>

<div class="notificacoes">  
  <div class="cont">  

    <div class="geral"> 

      <?php 
        $args = array('posts_per_page' => 2);
        $query = new WP_Query( $args );
         if($query->have_posts()) : 
        while( $query->have_posts()) : $query->the_post();
        $imagemCardPost = get_field('imagem_destacada');

      ?>        
      <div class="not">
          <div class="topicos"> 
              <?php 

                $terms = get_the_terms( $post->ID, 'category' );
                if ( !empty( $terms ) ){
                    // get the first term
                    $term = array_shift( $terms );
                      echo '<p class="categoria">' . $term->name . '</p>';
                }

               ?> 
            <p class="data"><?php echo mysql2date( get_option( 'date_format' ), $post->post_date); ?></p> 
          </div>  
            <p class="titulo"><?php   the_title(); ?></p>
            <p class="link"> <a href="#">saiba mais</a></p>
      </div>
      <?php endwhile; ?>  
      <?php  wp_reset_postdata(); ?>
      <?php endif; ?>     
    </div>                                 
  </div>  
  <div class="fechar">  
      <i class="fa-solid fa-circle-xmark"></i>
  </div>  
</div>  





<div id="menu2" class="">
  <div class="overlay">
    <nav class="main-nav">
      <div class="row">
        <div class="col-lg-6 left col-12">
            <ul class="ul">
              <li class="link-full ">
                <a href="#">
                  Imóveis
                </a>
              </li>
              <li class="link-full ">
                <a class="" href="<?php echo site_url(); ?>/sobre/">
                  Proxx
                </a>
              </li>
              
              <li class="link-full ">
                <a class="disabled" href="#">
                  blog
                </a>
              </li>
              <li class="link-full ">
                <a href="<?php echo site_url(); ?>/contato/">
                  Fale Conosco
                </a>
              </li> 
              <li class="link-full ">
                <a href="#">
                  Portal do cliente
                </a>
              </li>  
              <li class="link-full ">
                <a href="#">
                  Parcerias e corretores
                </a>
              </li>                                         
            </ul>          
        </div>
        <div class="col-lg-6 right p-0">  
            <div id="particles-js6"> </div>          
            <div class="cont-emp">  
              <div class="produtos2" > 
                   <?php     

                        $listagem_home = new WP_Query(array(
                        'post_type' => 'produtos',

                        
                        'posts_per_page' => 3)
                        );
                                  

                        if($listagem_home->have_posts()) : 

                            while($listagem_home->have_posts()) : $listagem_home->the_post(); 
                              $imgFachada = get_field('imagem_da_fachada');
                              $imgLiving = get_field('imagem_do_living');
                              $imgLazer = get_field('imagem_do_lazer');
                            ?>
                      <div class="item">  

                        <?php get_template_part( 'template/card' ); ?>

                      </div>  
                          <?php endwhile; ?>  
                      <?php endif; ?> 
                  
                </div>                  
            </div>  
        </div>  
      </div>    

    </nav>

    <footer class="menu-footer">
      <div class="footer-nav">
        <p class="title text-center">Nossos canais de venda:</p>
        <ul>
          <li>
            <a href="#" target="_blank">
             <i class="fa-brands fa-whatsapp"></i>
              
            </a>
          </li>

          <li>
            <a href="#" target="_blank">
             <i class="fa-solid fa-phone"></i>
              
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
            <i class="fa-solid fa-envelope"></i>
              
            </a>
          </li>                                        

          <li>
            <a href="#" target="_blank">
             <i class="fa-solid fa-headset"></i>
              
            </a>
          </li>          
          <li>
            <a href="#" target="_blank">
             <i class="fa-solid fa-comments"></i>
              
            </a>
          </li> 
        </ul>
      </div>
    </footer>    
  
  </div>  

</div>