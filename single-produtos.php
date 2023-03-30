<?php get_header(); ?>
<?php
while ( have_posts() ) : the_post();
	$imagemBanner = get_field('imagem_do_banner');
	$logo = get_field('logotipo');
	$fachada = get_field('fachada_do_produto');
?>
  
	<main class="banner-prod" style="background-image: linear-gradient(180deg, #0000008f 1%, transparent 22%) ,url(<?php echo $imagemBanner['url']; ?>);">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
							
						<div class="row">
							<div class="col-lg-3 col-4 alinhar">
								<div class="logo">
									<img src="<?php echo $logo['url']; ?>" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-lg-9 col-8">
								<div class="conteudo">
									<?php 

										$terms = get_the_terms( $post->ID, 'produtos-categoria' );
										if ( !empty( $terms ) ){
										    // get the first term
										    $term = array_shift( $terms );
										      echo '<p class="categoria">' . $term->name . '</p>';
										}

									 ?>	
									 <p class="title">
									 	<?php the_title(); ?>
									 </p>	
									 <p class="bairro">
									 	<?php the_field('bairro'); ?>
									 </p>
									 <div class="desc">
									 	<p class="comando"><?php the_field('comando_de_produto'); ?></p>
									 	<p class="comando"><?php the_field('bairro'); ?></p>
									 </div>									 
								</div>
							</div>
						</div>


					</div>
					<div class="col-lg-5">
						<div class="form">
							<div class="conteudo text-center">
								<p class="title-form">Compre o <span> <?php the_title(); ?> </span></p>
								<div class="topicos">
									<div class="topico">
										<a href="#">
											<button><i class="fa-brands fa-whatsapp"></i> WhatsApp</button>
										</a>
									</div>
									<div class="topico">
										<a class="mail-link" href="#mail">
											<button><i class="fa-solid fa-envelope"></i> E-mail</button>
										</a>										
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>				
	</main>
	<section class="sect1-prod">
		<div class="container cont">
			<div class="row">
				<div class="col-lg-6">
					<div class="conteudo">
						<p class="title"><?php the_field('titulo_conceitual'); ?> </p>
						<div class="texto">
							<?php the_field('texto_conceitual'); ?>
						</div>
					</div>
				
				</div>
				<div class="col-lg-6">
					<div class="content">
						<a href="<?php echo $fachada['url']; ?>" data-fancybox="" style="text-decoration: none;">
							<div class="img-fachada" style="background-image: url(<?php echo $fachada['url']; ?>);">
								
							</div>
						</a>						
					</div>
				</div>
			</div>
			<div class="descritivo">
				<div class="infos">
					<div class="column1">
						<p class="icon"><i class="fa-solid fa-bed"></i></p>
						<p class="description"><?php the_field('descricao'); ?></p>
					</div>
					<div class="column2">
						<p class="icon"><i class="fa-solid fa-car"></i></p>
						<p class="description"><?php the_field('vagas'); ?></p>								
					</div>
				</div>
				<div class="local text-center">
					<p class="chamada"><?php the_field('chamada_local'); ?> </p>
					<p class="endereco"><i class="fa-solid fa-location-dot"></i> <?php the_field('endereco'); ?> </p>
				</div>
			</div>			
		</div>

	</section>

	<section class="sect3-prod">
		<div class="container">
			<p class="sub-title text-center">Galeria</p>
			<p class="title text-center">Seu novo estilo de viver</p>
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="fachada-tab" data-toggle="tab" href="#fachada" role="tab" aria-controls="fachada" aria-selected="true">Fachada</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="areas-tab" data-toggle="tab" href="#areas" role="tab" aria-controls="areas" aria-selected="false">Áreas Comuns</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="internas-tab" data-toggle="tab" href="#internas" role="tab" aria-controls="internas" aria-selected="false">Áreas Internas</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="plantas-tab" data-toggle="tab" href="#plantas" role="tab" aria-controls="plantas" aria-selected="false">Plantas</a>
			  </li>			  
			</ul>			
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="fachada" role="tabpanel" aria-labelledby="fachada-tab">
			  	<span class="pagingInfo"></span>
			    <div class="galeria">
					<?php 
					$images = get_field('galeria_de_fachadas');
					if( $images ): ?>
					        <?php foreach( $images as $image ): ?>
					            <div class="item">
						    		<a href="<?php echo $image['url']; ?>" data-fancybox="fachada" style="text-decoration: none;">
						    			<div class="img" style="background-image: url(<?php echo $image['url']; ?>);">
						    				<div class="overlay">
						    					<div class="desc">
						    						<p><?php echo $image['title']; ?></p>
						    					</div>
						    				</div>
						    			</div>
						    		</a>
					            </div>
					        <?php endforeach; ?>
					<?php endif; ?>			    	
			    </div>
			  </div>
			  <div class="tab-pane fade" id="areas" role="tabpanel" aria-labelledby="areas-tab">
			    <div class="galeria">
					<?php 
					$images = get_field('galeria_de_areas_comuns');
					if( $images ): ?>
					        <?php foreach( $images as $image ): ?>
					            <div class="item">
						    		<a href="<?php echo $image['url']; ?>" data-fancybox="areas" style="text-decoration: none;">
						    			<div class="img" style="background-image: url(<?php echo $image['url']; ?>);">
						    				<div class="overlay">
						    					<div class="desc">
						    						<p><?php echo $image['title']; ?></p>
						    					</div>
						    				</div>
						    			</div>
						    		</a>
					            </div>
					        <?php endforeach; ?>
					<?php endif; ?>			    	
			    </div>
			  </div>
			  <div class="tab-pane fade" id="internas" role="tabpanel" aria-labelledby="internas-tab">
			    <div class="galeria">
					<?php 
					$images = get_field('galeria_de_area_interna');
					if( $images ): ?>
					        <?php foreach( $images as $image ): ?>
					            <div class="item">
						    		<a href="<?php echo $image['url']; ?>" data-fancybox="area" style="text-decoration: none;">
						    			<div class="img" style="background-image: url(<?php echo $image['url']; ?>);">
						    				<div class="overlay">
						    					<div class="desc">
						    						<p><?php echo $image['title']; ?></p>
						    					</div>
						    				</div>
						    			</div>
						    		</a>
					            </div>
					        <?php endforeach; ?>
					<?php endif; ?>			    	
			    </div>
			  </div>
			  <div class="tab-pane fade" id="plantas" role="tabpanel" aria-labelledby="plantas-tab">
			    <div class="galeria">
					<?php 
					$images = get_field('plantas');
					if( $images ): ?>
					        <?php foreach( $images as $image ): ?>
					            <div class="item">
						    		<a href="<?php echo $image['url']; ?>" data-fancybox="plantas" style="text-decoration: none;">
						    			<div class="img" style="background-image: url(<?php echo $image['url']; ?>);">
						    				<div class="overlay">
						    					<div class="desc">
						    						<p><?php echo $image['title']; ?></p>
						    					</div>
						    				</div>
						    			</div>
						    		</a>
					            </div>
					        <?php endforeach; ?>
					<?php endif; ?>			    	
			  </div>			  
			</div>
		</div>
	</section>
	<section class="sect4-prod">
		<div class="container">
			<p class="sub-title text-center">Diferenciais</p>
			<p class="title text-center">Exclusivos para você</p>			
			<div class="row" id="desk">
				<?php if( have_rows('diferenciais') ): ?>
				   
				    <?php while( have_rows('diferenciais') ): the_row(); 
				        $image = get_sub_field('icone');
				        ?>
				        <div class="col-lg-3 p-0">
				        	<div class="conteudo text-center">
				        		<div class="cont">
					        		<div class="topico1">
						        		<div class="icon" style="background-image: url(<?php echo $image['url']; ?>);">
						        			
						        		</div>				        			
					        		</div>
					        		<p class="nome">
					        			<?php the_sub_field('nome_do_diferencial'); ?>
					        		</p>				        			
				        		</div>
				        	</div>
				        </div>
				    <?php endwhile; ?>
				  
				<?php endif; ?>				
			</div>
			<div class="galeria" id="mob">
				<?php if( have_rows('diferenciais') ): ?>
				   
				    <?php while( have_rows('diferenciais') ): the_row(); 
				        $image = get_sub_field('icone');
				        ?>
				        <div class="item">
				        	<div class="conteudo text-center">
				        		<div class="cont">
					        		<div class="topico1">
						        		<div class="icon" style="background-image: url(<?php echo $image['url']; ?>);">
						        			
						        		</div>				        			
					        		</div>
					        		<p class="nome">
					        			<?php the_sub_field('nome_do_diferencial'); ?>
					        		</p>				        			
				        		</div>
				        	</div>
				        </div>
				    <?php endwhile; ?>
				  
				<?php endif; ?>				
			</div>			
		</div>
	</section>
	<section class="sect5-prod">
		<?php $imagemLocal = get_field('imagem_de_localizacao'); ?>
		<div class="container cont">
			<div class="row">
				<div class="col-lg-4 p-0">
					<a href="<?php echo $imagemLocal['url']; ?>" data-fancybox="" style="text-decoration: none;">
						<div class="img-local" style="background-image: url(<?php echo $imagemLocal['url']; ?>);">
							
						</div>
					</a>
				</div>
				<div class="col-lg-8 alinhar">
					<div class="conteudo">
						<p class="sub-title">Localização</p>
						<p class="title"><?php the_fielD('chamada_local'); ?> </p>	
						<div class="texto"><?php the_fielD('texto_de_localizacao'); ?> </div>							
					</div>				
				</div>
			</div>
		</div>
		<div class="cont2 text-center container">
			<p class="endereco"><?php the_field('endereco'); ?> </p>
		</div>	
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6474715353434!2d-46.78762488564093!3d-23.545178566878544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceff7574f6f65d%3A0xf20af5c17c24624d!2sR.%20Padre%20Donizete%2C%20234%20-%20Cipava%2C%20Osasco%20-%20SP%2C%2006080-160!5e0!3m2!1spt-BR!2sbr!4v1658943950133!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>			
	</section>		
	<section class="sect6-prod" id="mail">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 alinhar">
					<div class="conteudo">
						<p class="sub-title">Entre em contato</p>
						<p class="title">Fale conosco e fique por dentro das novidades do <span> <?php the_title(); ?> </span></p>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="form-prod">
						<?php echo do_shortcode('[contact-form-7 id="145" title="Produto"]'); ?>
					</div>
				</div>
			</div>				
		</div>
	</section>		
<?php  endwhile;?>










  
<?php get_footer(); ?>