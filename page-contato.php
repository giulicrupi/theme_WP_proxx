<?php get_header(); ?>
<section class="banner-contato" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/07/contato2.jpg);">
	<div class="overlay">
		<div class="overlay2">
			<div class="overlay3">
				<div class="container">
					<p class="sub-title">Fale Conosco</p>
					<p class="title">Veja abaixo os assuntos e entre em contato conosco!</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="sect1-contato">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 p-0 alinhar">
				<div class="top">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="comprar-tab" data-toggle="tab" href="#comprar" role="tab" aria-controls="comprar" aria-selected="true">Quero comprar</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="cliente-tab" data-toggle="tab" href="#cliente" role="tab" aria-controls="cliente" aria-selected="false">Sou cliente</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="Venda-tab" data-toggle="tab" href="#Venda" role="tab" aria-controls="Venda" aria-selected="false">Venda seu terreno</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="fornecedor-tab" data-toggle="tab" href="#fornecedor" role="tab" aria-controls="fornecedor" aria-selected="false">Fornecedor</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="assuntos-tab" data-toggle="tab" href="#assuntos" role="tab" aria-controls="sim" aria-selected="false">Outros assuntos</a>
					  </li>						  
					  				  
					</ul>							
				</div>							
			</div>
			<div class="col-lg-9 p-0">
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="comprar" role="tabpanel" aria-labelledby="comprar-tab">
				  		<div class="container">
				  			<p class="sub-title">Quero Comprar um imóvel</p>
				  			<div class="form-cf7">
				  				<?php echo do_shortcode('[contact-form-7 id="154" title="Quero Comprar"]'); ?>
				  			</div>
				  		</div>
				  </div>
				  <div class="tab-pane fade" id="cliente" role="tabpanel" aria-labelledby="cliente-tab">

				  		<div class="container">
				  			<p class="sub-title">Sou um cliente</p>
				  			<div class="form-cf7">
				  				<?php echo do_shortcode('[contact-form-7 id="156" title="Sou Cliente"]'); ?>
				  			</div>				  			
				  		</div>
				  </div>
				  <div class="tab-pane fade" id="Venda" role="tabpanel" aria-labelledby="Venda-tab">
				  		<div class="container">
				  			<p class="sub-title">Quero vender meu terreno</p>
				  			<div class="form-cf7">
				  				<?php echo do_shortcode('[contact-form-7 id="157" title="Vender Terreno"]'); ?>
				  			</div>					  			
				  		</div>
				  </div>
				  <div class="tab-pane fade" id="fornecedor" role="tabpanel" aria-labelledby="fornecedor-tab">
				  		<div class="container">
				  			<p class="sub-title">Fornecedores e Parceiros</p>
				  			<div class="form-cf7">
				  				<?php echo do_shortcode('[contact-form-7 id="158" title="Fornecedores"]'); ?>
				  			</div>					  			
				  		</div>
				  </div>
				  <div class="tab-pane fade" id="assuntos" role="tabpanel" aria-labelledby="assuntos-tab">
				  		<div class="container">
				  			<p class="sub-title">Outros Assuntos</p>
				  			<div class="form-cf7">
				  				<?php echo do_shortcode('[contact-form-7 id="159" title="Outros Assuntos"]'); ?>
				  			</div>				  			
				  		</div>
				  </div>					  
	  				  				  
				</div>						
			</div>
		</div>		
	</div>	
</section>			
















<?php get_footer(); ?>