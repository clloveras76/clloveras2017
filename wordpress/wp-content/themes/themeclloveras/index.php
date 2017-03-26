<!-- header -->
<?php get_header(); ?>
<!-- header -->


<!-- cuerpo Principal -->
<section id="main">

<!-- zona slider -->
	
	<?php include(TEMPLATEPATH. '/slideshow.php'); ?>
	<!-- Include de Slider -->

<!-- zona slider -->

<!-- abre containerHome caja contenidos central  -->	 	  		<!-- presentacion est?tica   -->
	<div class="containerHome">
		<div class="row">

			<div class="col-md-12">
	  		<!-- presentacion est?tica saludo   -->
				<div class="container">	
				<h1 id="h1welcome">HOLA!</h1>
				<p> <span class="ColorGreenBlue"> &#60; </span>Mi nombre es Carlos Lloveras, soy Licenciado en Comunicación y Web Designer. <br>
				Mis principales habilidades son la maquetación en HTML/CSS, diseño de interfaces en Photoshop, Flash e Ilustrator. También domino la programación en JavaScript, crossbrowsing, Responsive Design, prototipado y UX - diseño centrado en el usuario.<span class="ColorGreenBlue"> /&#62; </span></p>

				<br>
				</div>

	  		<!-- area expertise est?tica   -->
				<div class="row bloquedestacado">
					<div class="container">	
						<h2 class="txtcenter"><span class="underlinegreen">ÁREAS DE EXPERTISE</span></h2>
					      <div class="col-md-4 col-sm-6 col-xs-12 text-center">
					        <div class="home-services-box">
					          <h2><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;</h2>
					          <h3>WEB DESIGN</h3>
					          <p>Diseño UI/UX, responsive design, mockups, interfases para web y mobile.</p>
					        </div>
					      </div>
					      <div class="col-md-4 col-sm-6 col-xs-12 text-center">
	 						 <div class="home-services-box">
					          <h2><i class="fa fa-code" aria-hidden="true"></i> &nbsp;</h2>
					          <h3>PROGRAMACIÓN</h3>
					          <p>Maquetado HTML, HTML5, CSS, SASS; JQuery, PHP y Bootstrap.</p>
					        </div>
					      </div>
					      <div class="col-md-4 col-sm-6 col-xs-12 text-center">
	 						 <div class="home-services-box">
					          <h2><i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp;</h2>
					          <h3>DISEÑO DIGITAL</h3>
					          <p>Diseño de flyers, banners y retoque de imágenes.</p>
					        </div>
					      </div>
					      <div class="col-md-4 col-sm-6 col-xs-12 text-center">
	 						 <div class="home-services-box">
					          <h2><i class="fa fa-comments-o" aria-hidden="true"></i> &nbsp;</h2>
					          <h3>SOCIAL MEDIA</h3>
					          <p>Diseño de piezas para redes sociales, generación y carga de contenidos.</p>
					        </div>
					      </div>
					      <div class="col-md-4 col-sm-6 col-xs-12 text-center">
	 						 <div class="home-services-box">
					          <h2><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;</h2>
					          <h3>E-MAIL MARKETING</h3>
					          <p>Diseño, maquetado, y envío masivo de mailings y newsletters.</p>
					        </div>
					      </div>

					      <div class="col-md-4 col-sm-6 col-xs-12 text-center">
	 						 <div class="home-services-box">
					          <h2><i class="fa fa-wordpress" aria-hidden="true"></i> &nbsp;</h2>
					          <h3>WORDPRESS</h3>
					          <p>Instalación, customización de themes, implementación y mantenimiento.</p>
					        </div>
					      </div>	
				    </div>					      				      
				</div>
				<!-- area expertise est?tica   -->




				<div class="row bloquedestacado bgcolorwhite">
					<div class="container">	
					
						<h2 class="txtcenter marginBottom30"><span class="underlinegreen">ÚLTIMAS ENTRADAS</span></h2>

						<div class="row">


							  <?php query_posts('category_name=home&showposts=3'); ?>	
							  <!-- ?php query_posts('category_name=home'); ? este es el query original, el otro limita a 3 post  -->	
							
							  <?php if(have_posts()): while(have_posts()) : the_post();?> 				


							  <div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    <a href="<?php the_permalink();?>">	
							      <!-- img class="img-responsive" src="img/creatividad_digital.png" alt="..." -->
							      <?php if(has_post_thumbnail()){ the_post_thumbnail('mediumpost-thumb');} ?>	
							    </a>  
							      <div class="caption">
							        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							        <p><?php the_excerpt(); ?></p>
							        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">Ver m&aacute;s</a></p>
							      </div>
							    </div>
							  </div>

							
				
							<!-- si no encuentra articulos -->
							<?php endwhile; else: ?>
							<h4>No se encontraron Art&#237;culos</h4>
							
							<?php endif; ?>

					
							  
							</div>


					<!-- paginacion  -->
  							<div id="pagination"> 
								<p><?php next_posts_link('<- Post Siguientes'); ?></p>
								<p><?php previous_posts_link('<- Post Anteriores'); ?></p>
							  </div>


 					</div>
 				 </div>











			</div>


		</div>	


	</div>
<!-- cierra containerHome caja contenidos central  -->	
</section>
<!-- cierra cuerpo Principal -->




<?php get_footer(); ?>