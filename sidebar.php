<?php
/** sidebar.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

tha_sidebars_before(); ?>
<section id="secondary" class="widget-area span4" role="complementary">
	<aside id="text-2" class="widget well widget_text">
		<div class="textwidget">
			<h5>Lista de correo </h5>
			<form method="POST" action="https://listas.sindominio.net/mailman/subscribe/hacktivistas"> 
				<input type="text" value="" size="30" name="email" placeholder="tu@correo.net" style="width:96%;" />
				<br />
				<input type="submit" value="Subsɔribir" name="email-button" class="btn" />
			</form>
		</div>
	</aside>	
	
	<?php tha_sidebar_top();
	
	dynamic_sidebar( 'main' );
	#if ( ! dynamic_sidebar( 'main' ) ) {
	#	the_widget( 'WP_Widget_Archives', array(
	#		'count'		=>	0,
	#		'dropdown'	=>	0
	#	), array(
	#		'before_widget'	=>	'<aside id="archives" class="widget well widget_archives">',
	#		'after_widget'	=>	'</aside>',
	#		'before_title'	=>	'<h3 class="widget-title">',
	#		'after_title'	=>	'</h3>',
	#	) );
	#	the_widget( 'WP_Widget_Meta', array(), array(
	#		'before_widget'	=>	'<aside id="meta" class="widget well widget_meta">',
	#		'after_widget'	=>	'</aside>',
	#		'before_title'	=>	'<h3 class="widget-title">',
	#		'after_title'	=>	'</h3>',
	#	) );
	#}  //end sidebar widget area 
	
	tha_sidebar_bottom(); ?>
</section><!-- #secondary .widget-area -->
<?php tha_sidebars_after();


/* End of file sidebar.php */
/* Location: ./wp-content/themes/the-bootstrap/sidebar.php */
