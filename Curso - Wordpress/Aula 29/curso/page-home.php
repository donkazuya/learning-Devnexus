<?php get_header(); ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row">Slide</div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<h1>Our Services</h1>
					<div class="row">
						<div class="col-sm-4">
							<div class="services-item">
								<?php 
								if( is_active_sidebar( 'services-1' )){
									dynamic_sidebar( 'services-1' );
								}

								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								<?php 
								if( is_active_sidebar( 'services-2' )){
									dynamic_sidebar( 'services-2' );
								}

								?>								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								<?php 
								if( is_active_sidebar( 'services-3' )){
									dynamic_sidebar( 'services-3' );
								}

								?>								
							</div>
						</div>
					</div>
				</div>				
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<?php get_sidebar( 'home' ); ?>
						<div class="news col-md-8">
							<div class="container">
								<div class="row">
									<?php 

									$featured = new WP_Query( 'post_type=post&posts_per_page=1&cat=3,6' );

									if( $featured->have_posts() ):
										while( $featured->have_posts() ): $featured->the_post();
										endwhile;
										wp_reset_postdata();
									endif;
									?>
								</div>
							</div>
						</div>						
					</div>
				</div>				
			</section>
			<section class="map">
				<div class="container">
					<div class="row">Mapa</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>