<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=edge" /><![endif]-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154412913-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());  gtag('config', 'UA-154412913-1');
	</script>

</head>
<body <?php body_class(); ?>>
<div class="wrapper clearfix">

	<?php do_action( 'basic_before_header' ); ?>
	<!-- BEGIN header -->
	<header id="header" class="<?php echo apply_filters( 'basic_header_class', 'clearfix' ); ?>">

        <div class="header-top-wrap">
        <?php do_action( 'basic_header_top_wrap_begin' ); ?>

            <?php do_action( 'basic_before_sitetitle' ); ?>
            <div class="<?php echo apply_filters( 'basic_header_sitetitle_class', 'sitetitle maxwidth grid ' . basic_get_theme_option( 'title_position' ) ); ?>">

                <div class="<?php echo apply_filters( 'basic_logo_class', 'logo' ); ?>">

                    <?php do_action( 'basic_before_sitelogo' );
                    $h1_type = get_theme_mod( 'home_h1_type', 'sitetitle' );
                    if ( 'sitetitle' == $h1_type && is_home() ) { ?>
                        <h1 id="logo">
                    <?php } else { ?>
                        <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="blog-name">
                    <?php }

                        do_action( 'basic_before_blogname_in_logo' );
                        bloginfo( 'name' );
                        do_action( 'basic_after_blogname_in_logo' );

                    if ( 'sitetitle' == $h1_type && is_home() ) { ?>
                        </h1>
                    <?php } else { ?>
                        </a>
                    <?php } ?>

                    <?php do_action( 'basic_after_sitelogo' ); ?>

                    <?php $description = basic_get_theme_option( 'showsitedesc' );
                    $show_description  = ( false === $description || ! empty( $description ) || is_customize_preview() );
                    if ( $show_description ) { ?>
                        <p class="sitedescription"><?php bloginfo( 'description' ); ?></p>
                    <?php }
                    do_action( 'basic_after_sitedescription' ); ?>

                </div>
                <?php do_action( 'basic_after_sitetitle' ); ?>
            </div>

        <?php do_action( 'basic_header_top_wrap_end' ); ?>
        </div>

		<?php do_action( 'basic_before_topnav' ); ?>
        <div class="<?php echo apply_filters( 'basic_header_topnav_class', 'topnav' ); ?>">

			<div id="mobile-menu" class="mm-active"><?php _e( '菜单', 'basic' ); ?></div>

			<nav>
				<?php if ( has_nav_menu( 'top' ) ) :
					wp_nav_menu( array(
						'theme_location' => 'top',
						'menu_id'        => 'navpages',
						'container'      => false,
						'items_wrap'     => '<ul class="top-menu maxwidth clearfix">%3$s</ul>'
					) );
				else : ?>
					<ul class="top-menu maxwidth clearfix">
						<?php if ( is_front_page() ) { ?>
							<li class="page_item current_page_item"><span><?php _e( 'Home', 'basic' ); ?></span></li>
						<?php } else { ?>
							<li class="page_item">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'basic' ); ?></a>
							</li>
						<?php }
						wp_list_pages( 'title_li=&depth=2' ); ?>
					</ul>
				<?php endif; ?>
			</nav>

		</div>
		<?php do_action( 'basic_after_topnav' ); ?>

	</header>
	<!-- END header -->

	<?php do_action( 'basic_after_header' ); ?>


	<div id="main" class="maxwidth clearfix">

		<!-- BEGIN content -->
	
