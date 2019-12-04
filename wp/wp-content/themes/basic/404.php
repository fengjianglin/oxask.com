<?php get_header(); ?>
	<main id="content" class="content">
	<?php do_action( 'basic_main_content_404_inner_begin' ); ?>


    <?php do_action( 'basic_before_page_404_article' ); ?>
    <div class="post clearfix">
	    <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'basic' ); ?></h1>
		<br />
		<h3>
			<a href="/"><?php _e( '>>Return Home', 'basic' ); ?></a></h1>

	    <?php do_action( 'basic_before_page_404_content_box' );  ?>
       
	    <?php do_action( 'basic_after_page_404_content_box' );  ?>
    </div>
    <?php do_action( 'basic_after_page_404_article' ); ?>


	<?php do_action( 'basic_main_content_404_inner_end' ); ?>
	</main> 
	<!-- END #content -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>