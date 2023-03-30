<?php get_header(); ?>
			
<main >	

	<div class="banner-geral">	
		<?php     

		    $listagem_home = new WP_Query(array(
		    'produtos-destaque' => 'aparecer-no-banner',
		    
		    'posts_per_page' => 3)
		    );
		              

		    if($listagem_home->have_posts()) : 

		        while($listagem_home->have_posts()) : $listagem_home->the_post(); 

		        	$imagemBanner = get_field('imagem_do_banner');
		        	
		         ?>
		         <div class="item">	
					<div class="banner" style="background-image: url(<?php echo $imagemBanner['url']; ?>);">	
						<div class="overlay" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/06/bg-degra.png);">	
							<div class="container">
								<div class="row">
									<div class="col-lg-6 alinhar">
										<div class="conteudo">
											
											<?php 

												$terms = get_the_terms( $post->ID, 'produtos-categoria' );
												if ( !empty( $terms ) ){
												    // get the first term
												    $term = array_shift( $terms );
												      echo '<p class="categoria">' . $term->name . '</p>';
												}

											 ?>										
											<p class="nome-prod"><?php 	the_title(); ?></p>
											<p class="bairro"><?php the_field('bairro'); ?></p>
											<p class="comando"><?php the_field('comando_de_produto'); ?></p>
											<p class="desc"><?php the_field('descricao'); ?></p>
											<div class="botao">
												<a href="<?php echo site_url(); ?>/produto/hum-bela-vista/">
													<p>Conheça <i class="fa-solid fa-arrow-right"></i></p>
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-6"></div>
								</div>
							</div>
						</div>
					</div>
		         </div>
				<?php  endwhile; ?>
			<?php endif; ?>	
	</div>		
 	



	<div class="filtros">	
		<div class="container">	
			<div class="row text-center">	
				<div class="col borda-f" id="breve">
					<div class="caixa">	
						<div class="alinhar">	
							 <?php     

						        $listagem_home = new WP_Query(array(
						        'produtos-categoria' => 'breve-lancamento',
						        
						        'posts_per_page' => 4)
						        );
						                  

						        if($listagem_home->have_posts()) : 

						            while($listagem_home->have_posts()) : $listagem_home->the_post(); ?>
						            <p class="produto"><?php the_title(); ?> </p>
						            <?php endwhile; ?>  
						        <?php endif; ?> 
					         
						</div>        							
					</div>		
					<a href="<?php echo site_url(); ?>/produtos/categoria/breve-lancamento/">			
						<div class="filtro" >	
							<p>	Breve Lançamento <span>+</span></p>
						</div>
					</a>	
	
				</div>
				<div class="col borda-f"  id="lanc">
					<div class="caixa">	
						<div class="alinhar">	
							 <?php     

						        $listagem_home = new WP_Query(array(
						        'produtos-categoria' => 'lancamento',
						        
						        'posts_per_page' => 4)
						        );
						                  

						        if($listagem_home->have_posts()) : 

						            while($listagem_home->have_posts()) : $listagem_home->the_post(); ?>
						            <p class="produto"><?php the_title(); ?> </p>
						            <?php endwhile; ?>  
						        <?php endif; ?>  

						</div> 	
					</div>			
					<a href="<?php echo site_url(); ?>/produtos/categoria/lancamento/">				
						<div class="filtro" >

							<p>Lançamento <span>+</span></p>
						</div>	
					</a>
				</div>
				<div class="col borda-f " id="obras">
					<div class="caixa">	
						<div class="alinhar">	
							 <?php     

						        $listagem_home = new WP_Query(array(
						        'produtos-categoria' => 'em-obras',
						        
						        'posts_per_page' => 4)
						        );
						                  

						        if($listagem_home->have_posts()) : 

						            while($listagem_home->have_posts()) : $listagem_home->the_post(); ?>
						            <p class="produto"><?php the_title(); ?> </p>
						            <?php endwhile; ?>  
						        <?php endif; ?>  
	
						</div> 	
					</div>		
					<a href="<?php echo site_url(); ?>/produtos/categoria/em-obras/">				
						<div class="filtro">	
							<p>	Em Obras <span>+</span></p>
						</div>	
					</a>
				</div>
				<div class="col borda-f" id="pronto">
					<div class="caixa">	
						<div class="alinhar">	
							 <?php     

						        $listagem_home = new WP_Query(array(
						        'produtos-categoria' => 'pronto',
						        
						        'posts_per_page' => 4)
						        );
						                  

						        if($listagem_home->have_posts()) : 

						            while($listagem_home->have_posts()) : $listagem_home->the_post(); ?>
						            <p class="produto"><?php the_title(); ?> </p>
						            <?php endwhile; ?>  
						        <?php endif; ?>  

						</div> 	
					</div>			
					<a href="<?php echo site_url(); ?>/produtos/categoria/pronto/">			
						<div class="filtro">	
							<p>	Pronto <span>+</span></p>
						</div>	
					</a>
				</div>
				<div class="col borda-f borda-port">
					<div class="filtro">	
						<p>	Portfólio <span>+</span></p>
					</div>	
				</div>
			</div>	
		</div>	
	</div>	
</main>	

<section class="sect1">	
	
	<svg class="img-fluid elemento" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58.62 58.62"><defs><style>.elemento .cls-1{fill:#ffcf01;}</style></defs><g id="Camada_2" data-name="Camada 2"><g id="Layer_1" data-name="Layer 1"><path class="cls-1" d="M29.31,0A29.31,29.31,0,1,0,58.62,29.31,29.31,29.31,0,0,0,29.31,0Zm6,38.38-12,15.53.5-21.41L8.45,17.63l19.44,2.61,19.44,2.61Z"/></g></g></svg>
	<div class="container">	

		<div class="row">	

			<div class="col-lg-4 col-12 alinhar">
				<div class="content">	
					<p class="sub">	Empreendimentos</p>
					<p class="title">	
						Mais do que  <br>	
						morar, uma  <br>	         
						experiência <br>	
						de viver
					</p>
				</div>
			</div>
			<div class="col-lg-8 col-12 p-0">
				 <?php     

			        $listagem_home = new WP_Query(array(
			        'produtos-destaque' => 'produto-destaque',
			        
			        'posts_per_page' => 1)
			        );
			                  

			        if($listagem_home->have_posts()) : 

			            while($listagem_home->have_posts()) : $listagem_home->the_post(); 
			            	$imgFachada = get_field('imagem_da_fachada');
			            	$imgLiving = get_field('imagem_do_living');
			            	$imgLazer = get_field('imagem_do_lazer');
			            ?>	

						<div class="fachada" style="background-image: url(<?php echo $imgFachada['url']; ?>);">
							
						</div>
						<div class="conteudo text-right " >
							<div class="img lazer rellax" style="background-image: url(<?php echo $imgLazer['url']; ?>);transition: transform 5s cubic-bezier(0,1,.1,1);">	
								
							</div>
							<div class="infos">
							<?php 

								$terms = get_the_terms( $post->ID, 'produtos-categoria' );
								if ( !empty( $terms ) ){
								    // get the first term
								    $term = array_shift( $terms );
								      echo '<p class="categoria">' . $term->name . '</p>';
								}

							 ?>	
								<p class="nome-prod"><?php 	the_title(); ?></p>
								<p class="comando"><?php 	the_field('comando_de_produto'); ?></p>
								<p class="desc"><?php 	the_field('descricao'); ?></p>
								<div class="botao">
									<a href="<?php echo site_url(); ?>/produto/hum-bela-vista/">
										<p>Conheça <i class="fa-solid fa-arrow-right"></i></p>
									</a>
								</div>

							</div>
							<div class="living rellax" style="background-image: url(<?php echo $imgLiving['url']; ?>);transition: transform 5s cubic-bezier(0,1,.5,1);">
								
							</div>
						</div>
			            <?php endwhile; ?>  
			        <?php endif; ?>  						
			</div>

		</div>	

	</div>	

</section>	
<section class="sect2">	
	<div id="particles-js"></div>
	<div class="container">	

		<div class="row" id="desk">	
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
					<div class="col-lg-3">	

						<?php get_template_part( 'template/card' ); ?>

					</div>	
	            <?php endwhile; ?>  
	        <?php endif; ?>	
	        		<div class="col-lg-3 alinhar">	
	        			<div class="conteudo">			
	        				<div class="botao-amarelo">
	        					<a href="<?php echo site_url(); ?>/empreendimentos/">
	        						<button>Ver +</button>
	        					</a>
	        				</div>
	        			</div>
	        		</div>					
		</div>	

		<div class="produtos" id="mob">	
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

							<div class="card-prod">	
								<?php 

									$terms = get_the_terms( $post->ID, 'produtos-categoria' );
									if ( !empty( $terms ) ){
									    // get the first term
									    $term = array_shift( $terms );
									      echo '<p class="categoria">' . $term->name . '</p>';
									}

								 ?>	
								<p class="nome-prod"><?php 	the_title(); ?></p>
								<div class="img-fachada" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/06/Proxx_BellaVista_Fachada_Noturna_HR-1.jpg);">	
									
								</div>
								<div class="infos">	
									<p class="local"><?php the_field('bairro'); ?></p>
									<p class="comando"><?php the_field('comando_de_produto'); ?></p>
									<p class="desc"><?php the_field('descricao'); ?></p>
									<div class="botao">
										<a href="<?php echo site_url(); ?>/produto/hum-bela-vista/">	
											<p>Conheça <i class="fa-solid fa-arrow-right"></i></p>
										</a>
									</div>						
								</div>
							</div>

						</div>	
		            <?php endwhile; ?>  
		        <?php endif; ?>	
				
			</div>		

	</div>	
</section>	
<section class="sect3">	
	<div id="particles-js2"></div>
	<div class="container">	
		<div class="conteudo rellax" style="transition: transform 5s cubic-bezier(0,1,.1,1);">	
			<p class="sub">conceito hum</p>
			<p class="title">Mais do que <br>morar bem, trata-se <br>de viver bem</p>
			<div class="botao">
				<a href="<?php echo site_url(); ?>/conceito-hum/">
					<p>Conheça <i class="fa-solid fa-arrow-right"></i></p>
				</a>
			</div>			
		</div>	
		<div class="row">	

			<div class="col-lg-9 p-0">	
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/hum-conc2.png" alt="" class="img-fluid">
			</div>	
		</div>	
	</div>	

</section>	
<section class="sect4">	
	<div id="particles-js3"></div>
	<div class="container">	

		<div class="row text-center" id="desk">	
			<div class="col-lg-4 text-center">	
				<div class="content">
					<div class="infos">	
						<p class="sub">Home</p>
						<p class="title">Mais do que Simplesmente Morar, uma Experiência de Viver.</p>
					</div>	
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/home.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="content">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/urbanity.jpg" alt="" class="img-fluid">
					<div class="infos">	
						<p class="sub">URBANITY</p>
						<p class="title">Equipamentos Urbanos Integrados à Experiência de Viver que Estabelece um Estilo de Vida.</p>
					</div>	
					
				</div>
			</div>
			<div class="col-lg-4 pad-top-maior">
				<div class="content">
					
					<div class="infos">	
						<p class="sub">MOBILITY</p>
						<p class="title">Compartilhamento que a Vida Moderna Exige, Trabalhando em Favor de Sua Mobilidade.</p>
					</div>	
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/mobi.jpg" alt="" class="img-fluid">
				</div>				
			</div>
		</div>
		<div class="produtos text-center" id="mob">	
			<div class="item text-center">	
				<div class="content">
					<div class="infos">	
						<p class="sub">Home</p>
						<p class="title">Mais do que Simplesmente Morar, uma Experiência de Viver.</p>
					</div>	
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/home.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="item">
				<div class="content">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/urbanity.jpg" alt="" class="img-fluid">
					<div class="infos">	
						<p class="sub">URBANITY</p>
						<p class="title">Equipamentos Urbanos Integrados à Experiência de Viver que Estabelece um Estilo de Vida.</p>
					</div>	
					
				</div>
			</div>
			<div class="item ">
				<div class="content">
					
					<div class="infos">	
						<p class="sub">MOBILITY</p>
						<p class="title">Compartilhamento que a Vida Moderna Exige, Trabalhando em Favor de Sua Mobilidade.</p>
					</div>	
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/06/mobi.jpg" alt="" class="img-fluid">
				</div>				
			</div>
		</div>
	</div>	
	<div id="particles-js4"></div>
</section>	
<section class="sect5" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/06/bg-blog.jpg);">
	<?php 
		$args = array('posts_per_page' => 1);
		$query = new WP_Query( $args );
		 if($query->have_posts()) : 
		while( $query->have_posts()) : $query->the_post();
		$imagemCardPost = get_field('imagem_destacada');

	?>			
		<div class="container">	
			<div class="row">	
				<div class="col-lg-9">	
					<div class="conteudo">	
						<p class="sub">Blog da proxx</p>
						<p class="title">Dicas e <br>Novidades</p>
					</div>
					<div class="post">	
						<div class="row">	
							<div class="col" id="desk"></div>
							<div class="col-lg-6 col-12">
								<div class="postagem">	
									<div class="conteudo-p">	
										<p class="titulo"><?php the_title(); ?></p>
										<div class="leitura">
											<p>tempo de leitura: <span><?php echo tt_reading_time(); ?></span></p>
											
										</div>											
										<p class="data"><?php the_date(); ?></p>
										
										<div class="texto">
								           <?php 
												$summary = get_field('texto_de_postagem');
												$len=strlen($summary);

												if($len>40){
													$summary=substr($summary,0,186). '...';
												}

												echo $summary;

								            ?>
										</div>
										<div class="botao">
											<a href="#">
												<p>leia mais <i class="fa-solid fa-arrow-right"></i></p>
											</a>
										</div>	
									</div>							
								</div>	
							</div>			
						</div>	
					</div>		
				</div>
			</div>			
		</div>
		<div class="img-blog rellax" style="background-image: url(<?php echo $imagemCardPost['url']; ?>); transition: transform 5s cubic-bezier(0,1,.1,1);">	

		</div>
	<?php endwhile; ?>	
	<?php  wp_reset_postdata(); ?>
	<?php endif; ?>			
</section>	
<section class="sect6">
	<div class="container">
		<div class="row">
			<?php 
				$args = array('posts_per_page' => 2, 'offset' => 1);
				$query = new WP_Query( $args );
				 if($query->have_posts()) : 
				while( $query->have_posts()) : $query->the_post();
				$imagemCardPost = get_field('imagem_destacada');

			?>							
				<div class="col-lg-6">
					<div class="card-blog">
						<div class="row">
							<div class="col-lg-5">
								<div class="img-post" style="background-image: url(<?php echo $imagemCardPost['url']; ?>);">
									
								</div>
							</div>
							<div class="col-lg-7 c-7">
							<?php 

								$terms = get_the_terms( $post->ID, 'category' );
								if ( !empty( $terms ) ){
								    // get the first term
								    $term = array_shift( $terms );
								      echo '<p class="categoria">' . $term->name . '</p>';
								}

							 ?>	
								<p class="titulo"><?php the_title(); ?></p>
								<div class="cont-d-l">
									<p class="date"><?php echo mysql2date( get_option( 'date_format' ), $post->post_date); ?></p>
									<div class="leitura">
										<p>tempo de leitura: <span><?php echo tt_reading_time(); ?></span></p>
										
									</div>										
								</div>
								<div class="texto">
						           <?php 
										$summary = get_field('introducao');
										$len=strlen($summary);

										if($len>40){
											$summary=substr($summary,0,253). '...';
										}

										echo $summary;

						            ?>
								</div>
								<div class="botao">
									<a href="#">
										<p>leia mais <i class="fa-solid fa-arrow-right"></i></p>
									</a>
								</div>																
							</div>
						</div>
					</div>			
				</div>
			<?php endwhile; ?>	
			<?php  wp_reset_postdata(); ?>
			<?php endif; ?>						
		</div>
		<div class="botao-amarelo text-center">
			<a href="#">
				<button>Ver +</button>
			</a>
		</div>		
	</div>
</section>
<section class="sect7">
	<div id="particles-js5"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="alinhar">
					<p class="sub">newsletter</p>
					<p class="title">

						CADASTRE-SE <br>	
						E FIQUE POR DENTRO <br>	
						DAS NOVIDADES DA Proxx


					</p>

				</div>			
			</div>
			<div class="col-lg-6">
			
				<div class="form">
					<?php echo do_shortcode('[contact-form-7 id="70" title="Formulário de contato 1"]'); ?>
				</div>
							
			</div>
		</div>
	</div>
</section>		

<?php get_footer(); ?>


		


