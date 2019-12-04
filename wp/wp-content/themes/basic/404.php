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
		
		<!-- 内容匹配广告 -->
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-format="autorelaxed"
			 data-ad-client="ca-pub-8889449066804352"
			 data-ad-slot="1928667997"></ins>
		<script>
			 (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<!-- 内容匹配广告 END -->

    </div>
    <?php do_action( 'basic_after_page_404_article' ); ?>


	<?php do_action( 'basic_main_content_404_inner_end' ); ?>
	</main> 
	<!-- END #content -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>