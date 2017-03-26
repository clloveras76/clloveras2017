<?php    
	register_nav_menus( array(
	'menu' => 'Menu superior',
	'menu_footer' => 'Menu Footer'
	));

	/* función thumbnails para  que se muestren minuaturas de las entradas en la home */
	add_theme_support('post-thumbnails');

	/* función para agregar tamaños de imágenes soportados */
	add_image_size('slider_thumbs',1200,400, true);
	add_image_size('list_articles_thumbs',450,370, true);	
	
	
	/* Función para widget footer */
	
	register_sidebar(array(
		'name' => 'Footer',
		'before_widget' => '<div class="col-md-6 marginBottom30">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
	
	         	
?>	