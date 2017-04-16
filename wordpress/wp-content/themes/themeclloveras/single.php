<!-- header -->
<?php get_header(); ?>
<!-- header -->


<!-- cuerpo Principal -->
<section id="main">

<!-- abre containerHome caja contenidos central  -->	 	  		<!-- presentacion est?tica   -->
	<div class="containerHome">
		<div class="row">

			<div class="col-md-12">
				<div class="row bloquedestacado bgcolorwhite">
					<div class="container">	
					
						<div class="row">
							
							<!-- inicio bucle de articulos -->
							<!-- busca articulos -->
							<?php if(have_posts()): while(have_posts()) : the_post();?> 


		    				  <div class="col-sm-12 col-md-12">
							    <div class="thumbnail">
							    
							      <div class="caption">
							        
									<h2 class="txtcenter marginBottom30"><span class="underlinegreen"><a class="h2titlepage" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h2>
							         <p class="date"><?php the_date();?><span class="categoriblog"><?php the_category(); ?></span></p>
							         <!-- a href="<?php the_permalink();?>">	
							     		 <!-- ?php if(has_post_thumbnail()){ the_post_thumbnail('mediumpost-thumb');} ? -->	
							    	<!-- /a -->  
							         <p><?php the_content(); ?></p>
							      </div>
							    </div>
							  </div>

							

							
				
							<!-- si no encuentra articulos -->
							<?php endwhile; else: ?>
							<h4>No se encontraron Art&#237;culos</h4>
							
							<?php endif; ?>

											
							<!-- caja comentarios -->
											<div id="comentarios">
												<h3>Comentarios</h3>
												<div id="caja_comentarios">
													<?php comments_template(); ?>
												</div>
											</div>
							<!-- caja comentarios -->

							  
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