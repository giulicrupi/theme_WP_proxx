<?php get_header(); ?>
<?php 

while ( have_posts() ) : the_post();
	$imagemBanner = get_field('imagem_do_banner');
	$logo = get_field('logotipo');
	$fachada = get_field('fachada_do_produto');
?>

 
<section class="banner-sobre" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/07/proxx.jpg);">
	<div class="overlay">
		<div class="overlay2">
			<div class="overlay3">
				<div class="container">
					<p class="sub-title">Sobre a Proxx</p>
					<p class="title">Com mais de 30 anos de experiência, veja um pouco do que ja fizemos</p>
				</div>				
			</div>
		</div>
	</div>
</section>
<section class="sect1-sobre">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="conteudo">
					<p>
						Da associação de profissionais com mais de 30 anos de experiência no mercado imobiliário, tanto na incorporação e construção assim como no desenvolvimento estratégico e intermediação, nasceu a Proxx Empreendimentos e Participações. <br> <br>

						Fundada em 2011, a Proxx é uma empresa focada no desenvolvimento de empreendimentos residenciais que oferecem projetos alinhados com a comodidade e a qualidade de vida de seus clientes.<br> <br>

						A ampla experiência dos profissionais de sua equipe, permite o planejamento do processo construtivo, a antecipação de tendências e a melhor relação custo/benefício, através de imóveis racionalizados.						
					</p>
				</div>			
			</div>
			<div class="col-lg-6 alinhar text-center">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/proxx-logo.png" alt="" class="img-fluid" style="width: 70%;">
			</div>
		</div>
	</div>
</section>	
<section class="sect2-sobre" >
	<div class="container text-center">
		<p class="title">Nossos Parceiros e associados</p>
		<p class="texto">“UM MONTE DE GENTE BOA JUNTO, FAZ A FIRMA GRANDE“</p>
		<div class="parceiros">
		<?php if( have_rows('parceiros') ): ?>
		    <?php while( have_rows('parceiros') ): the_row(); 
		        $image = get_sub_field('logo');
		        ?>	
				<div class="item">
					<img src="<?php echo $image['url']; ?>" alt="" class="img-fluid icon">
					<p class="nome"><?php the_sub_field('nome_do_parceiro'); ?> </p>
				</div>
		    <?php endwhile; ?>
		<?php endif; ?>			
		</div>
		<div class="inst">
			<p class="text-center">Instituições financeiras:</p>
			<div class="row text-center">
				<div class="col-lg-3">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/caixav9.png" alt="" class="img-fluid icon">
				</div>
				<div class="col-lg-3">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/bradescov8.png" alt="" class="img-fluid icon">
				</div>
				<div class="col-lg-3">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/santander.png" alt="" class="img-fluid icon">
				</div>
				<div class="col-lg-3">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/itauv9.png" alt="" class="img-fluid icon">
				</div>
			</div>
		</div>
	</div>
</section>	
<section class="sect3-sobre" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/07/aperto.jpg);">
	<div class="overlay">
		<div class="container">
			<div class="infos">
				<p class="title">Proxx</p>
				<p class="texto">

					Pelas facilidades de compra, linhas diferenciadas de produtos, pagamentos flexíveis e parceria com os melhores fornecedores e com os maiores bancos de financiamento imobiliário, além de ser uma grande parceira da Caixa Econômica Federal, a Proxx investe e estabelece relacionamentos transparentes com seus clientes e, por isso, é sinônimo de excelência, transformando cada projeto em uma história de sucesso e de realização dos sonhos das famílias que se tornam clientes e amigos, porque entendemos que, afinal, <br> 

								
				</p>
				<p><span>negócios são feitos entre pessoas.</span>	</p>

			</div>		
		</div>
	</div>
</section>
<section class="sect4-sobre">
	<div class="container">
		<p class="sub-title text-center">o time</p>
		<p class="title text-center">Nosso time de mentores</p>
		<div class="row">
			<div class="col-lg-6">
				<figure class="snip0057 blue">
				  <figcaption>
				    <h2>Celso  <span>Santos</span></h2>
				    <p>Formado em engenharia elétrica na UNESP e  pós-graduado em Business e Marketing pela FGV-SP. Celso desenvolveu brilhante carreira na indústria eletroeletrônica, tendo ocupado cargos de diretor de multinacionais com atuação no Brasil e América Latina. Realizou ainda diversos projetos de loteamentos residenciais.</p>
				    <div class="icons"><a href="https://www.linkedin.com/in/celso-antonio-dos-santos-57667317" target="_blank"><i class="fa-brands fa-linkedin"></i></a></div>
				  </figcaption>
				  <div class="image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/celso-1.jpg" alt="sample3"/></div>
				  
				</figure>					
			</div>
			<div class="col-lg-6">
				<figure class="snip0057 blue">
				  <figcaption>
				    <h2>Herminio   <span>Bonoldi</span></h2>
				    <p>Publicitário e contabilista formado pela Fundação Álvares Penteado, com especialização em marketing de serviços pela ESPM e atua a mais de 20 anos no mercado imobiliário. Já foi diretor executivo de grandes empresas do setor, fundou e dirigiu várias empresas e hoje é mentor de várias empresas no mercado imobiliário e outros.</p>
				    <div class="icons"><a href="https://www.linkedin.com/in/herminio-bonoldi-8918aa28" target="_blank"><i class="fa-brands fa-linkedin"></i></a></div>
				  </figcaption>
				  <div class="image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/herminio.jpg" alt="sample3"/></div>
				  
				</figure>					
			</div>			
			<div class="col-lg-6">
				<figure class="snip0057 blue">
				  <figcaption>
				    <h2>Rogério   <span>Modena</span></h2>
				    <p>Cursou engenharia civil na UNESP. Iniciou atividades com escritório de projetos e fez carreira na Abijcsud, onde foi gerente nacional de construção. Foi responsável por projetos e construções de templos, capelas, centro de treinamentos, conjuntos esportivos e escritórios, com de mais de 500.000 m² de áreas construídas.</p>
				    <div class="icons"><a href="https://www.linkedin.com/in/osvaldo-rogerio-modena-b80a914b" target="_blank"><i class="fa-brands fa-linkedin"></i></a></div>
				  </figcaption>
				  <div class="image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/rogerio3.jpg" alt="sample3"/></div>
				  
				</figure>					
			</div>
			<div class="col-lg-6">
				<figure class="snip0057 blue">
				  <figcaption>
				    <h2>Marco  <span>Aurélio Lima</span></h2>
				    <p>Cursou engenharia civil na Faculdade de Engenharia de São Paulo, e pela FGV cursos de educação continuada, investimentos imobiliários, empreendedorismo e criação.
Na sua carreira como empresário, criou, viabilizou e executou diversos empreendimentos imobiliários residenciais na região da Grande São Paulo.</p>
				    <div class="icons"><a href="#"><i class="fa-brands fa-linkedin"></i></a></div>
				  </figcaption>
				  <div class="image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/marco.jpg" alt="sample3"/></div>
				  
				</figure>					
			</div>			

		</div>				
	</div>
</section>	
<section class="sect5-sobre" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/07/bg2.jpg);">
	<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/social-desk.jpg" alt="" class="img-fluid" id="desk">
	<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/07/social-mobile.jpg" alt="" class="img-fluid" id="mob">
	<div class="container text-center">
		<p class="title">
			<span>“</span>SOMOS UMA EMPRESA COMPROMETIDA COM O PRÓXXIMO <span>“</span>
		</p>
		<div class="galeria">
			<?php 
			$images = get_field('galeria_social');
			if( $images ): ?>
			        <?php foreach( $images as $image ): ?>
			            <div class="item">
				    		<a href="<?php echo $image['url']; ?>" data-fancybox="social" style="text-decoration: none;">
				    			<div class="img" style="background-image: url(<?php echo $image['url']; ?>);">
				    				<div class="overlay">

				    				</div>
				    			</div>
				    		</a>
			            </div>
			        <?php endforeach; ?>
			<?php endif; ?>				
		</div>
	</div>
</section>		
<?php  endwhile;?>
<?php get_footer(); ?>