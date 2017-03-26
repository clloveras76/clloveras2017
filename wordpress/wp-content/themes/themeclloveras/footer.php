


</div>
<!-- cierra mainContainerHome  -->



<!-- footer -->
<footer id="footer" class="mainFooter">
    <div class=	"container">
    	<div class="row">
	        

	        <!--  Función para widget footer -->
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>



	    	<div class="col-md-6 footerSocial marginBottom30 lineHeight30">
	        <a href='#'><i class="fa fa-facebook fa-3x fa-fw"></i></a>
	        <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a>
	        <a href='#'><i class="fa fa-linkedin fa-3x fa-fw"></i></a>
	        </div>


        </div>
        
        <div class="row">
        	<div class="col-md-12">
        		<a href="#topSite" class="square-l goup" style="position: relative">
					<span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
					</span>
				</a>	
        	</div>
        </div>
    </div>
</footer>
<!-- footer -->










  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/parallax.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/scripts.js"></script>

  <?php wp_footer(); ?>
  
  
</body>
</html>


