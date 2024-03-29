
<?php
	/**
	 * The template for displaying the footer
    *
    * Contains the closing of the #content div and all content after.
	 *
	 * @package hellopress
	 * @since 0.1.0
	 */
?>
				</div>
			</div>
		</div>

    	<?php wp_footer(); ?>

		<section id="contact" class="contact-section section-padding">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-3 footer-section-space">
						<div class="row">
							<div class="footer-company">
								<a href="<?php echo get_home_url(); ?>">
									<img src="<?php echo getThemeLogoUrl(); ?>" style="height: 70px; width: 70px;">
								</a>
								<a href="<?php echo get_home_url(); ?>">
									<h1 ><?php echo get_bloginfo('name'); ?></h1>
								</a>
								<?php /* <p>Realtime WebSocket Multiplayer Server for Indie Game Developers.</p> */ ?>
								<div class="social-icons">
									<ul class="list-inline">
										<?php if(!empty(getThemeField( 'social_gp', '' ))) { ?>
											<li><a href="<?php echo getThemeField( 'social_gp', '' ); ?>" target="_blank"><i class="fa fa-android"></i></a></li>
										<?php } ?>
										<?php if(!empty(getThemeField( 'social_yt', '' ))) { ?>
											<li><a href="<?php echo getThemeField( 'social_yt', '#' ); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
										<?php } ?>
										<?php if(!empty(getThemeField( 'social_tw', '' ))) { ?>
											<li><a href="<?php echo getThemeField( 'social_tw', '#' ); ?>"><i class="fa fa-twitter"></i></a></li>
										<?php } ?>
										<?php if(!empty(getThemeField( 'social_fb', '' ))) { ?>
											<li><a href="<?php echo getThemeField( 'social_fb', '#' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-3 footer-section-space">
						<div class="row">
							<div class="footer-company">
								<strong><?php echo getThemeField( 'menua_name', "FIRST MENU" ); ?></strong>
								<ul>
									<?php getThemeMenuItems('menua_target'); ?>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-3 footer-section-space">
						<div class="row">
							<div class="footer-company">
								<strong><?php echo getThemeField( 'menub_name', "SECOND MENU" ); ?></strong>
								<ul>
									<?php getThemeMenuItems('menub_target'); ?>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-sm-3 footer-section-space">
						<div class="row">
							<div class="footer-company">
								<strong><?php echo getThemeField( 'menuc_name', "THIRD MENU" ); ?></strong>
								<ul>
									<?php getThemeMenuItems('menuc_target'); ?>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<footer class="footer-wrapper">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
				<div class="copyright text-center">
					<p><?php echo get_bloginfo('name'); ?> &copy; <?php echo date("Y"); ?>. All rights reserved.</p>
				</div>
				</div>
			</div>
			</div>
		</footer>

		<div class="scroll-up">
			<a href="#home"><i class="fa fa-chevron-up"></i></a>
		</div>

    </body>
</html>