<?php get_header(); ?>
<section class="banner-emp" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/07/emp2.jpg);">
	<div class="overlay">
		<div class="overlay2">
			<div class="container text-center">
				<p class="sub-title">Empreendimentos</p>
				<p class="title">Encontre o <span>HUM</span> ideal para você</p>
				<div class="pesquisar text-center">
					<p>Procure a opção desejada:</p>
					<div class="filtros">
						<div class="topico">
							<a href="<?php echo site_url(); ?>/produtos/categoria/breve-lancamento/">
								<button>Breve Lançamento</button>
							</a>
						</div>
						<div class="topico">
							<a href="<?php echo site_url(); ?>/produtos/categoria/lancamento/">
								<button>Lançamento</button>
							</a>
						</div>
						<div class="topico">
							<a href="<?php echo site_url(); ?>/produtos/categoria/em-obras/">
								<button>Em Obras</button>
							</a>
						</div>	
						<div class="topico">
							<a href="<?php echo site_url(); ?>/produtos/categoria/pronto/">
								<button>Pronto</button>
							</a>
						</div>								
					</div>					
				</div>
			</div>				
		</div>		
	</div>
</section>
<section class="sect1-emp">
	<div class="container">
		<div class="row" >	
			 <?php     

		        $listagem_home = new WP_Query(array(
		        'post_type' => 'produtos',

		        
		        'posts_per_page' => -1)
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
				
		</div>		
	</div>
</section>
<?php get_footer(); ?>