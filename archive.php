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
		<div class="encontramos text-center">
			<p>	Encontramos
				<?php
			   global $wp_query;
			   $not_singular = $wp_query->found_posts > 1 ? 'resultados' : 'resultado'; // if found posts is greater than one echo results(plural) else echo result (singular)
			   echo $wp_query->found_posts . " $not_singular  para a sua busca";
			?>							
			</p>	
			<hr>		
		</div>			

				<?php if( have_posts() ) { ?>
				
							<div class="row card3">		

								    <?php while( have_posts() ) : the_post();  ?>

							    		<div class="col-lg-3">
							    			<?php get_template_part( 'template/card' );?>
							    		</div>




								    <?php endwhile;?>

								    <div class="container">
								    	<?php 
									    echo '<div class="container text-center navs-navigation">';
									    the_posts_pagination( array(
									    	'mid_size'=>3,
										 	'prev_text' => _( '« Anterior'),
										  	'next_text' => _( 'Proxima »'),
										) );
										 echo '</div>';
								    	 ?>
								    </div>



				


								</div>				
   
				<?php } else{
					echo '<div class="container text-center" style="    margin-top: 19%;">';
					echo '<h2>Não possui empreendimento nessa categoria</h2>';
					echo '</div>';

				}




				 ?>				

	</div>	
</section>



    

<?php get_footer(); ?>