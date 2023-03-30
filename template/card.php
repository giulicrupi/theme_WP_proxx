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