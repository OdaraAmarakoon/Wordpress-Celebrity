<footer class="main-footer" id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col">
				<?php if (get_field('sub_heading_1', 'option')) : ?>
					<div class="sub-topics"><?php the_field('sub_heading_1', 'option'); ?></div>
				<?php endif; ?>
				<div class="footer-menu">
				<div class="menu-wrapper">
					<nav class="navbar navbar-expand-md p-0" id="menu">
						<div id="navbarCollapse">
							<?php
							$defaults = array(
								'menu'            => 'Footer menu',
								'container'       => false,
								'menu_class'      => 'menu',
								'echo'            => true,
								'fallback_cb'     => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav">%3$s</ul>',
								'depth'           => 0
							);
							wp_nav_menu($defaults);
							?>
						</div>
					</nav>
				
				</div>
			</div>
		</div>

			<div class="col-lg-3 col">
			<?php if (get_field('sub_heading_2', 'option')) : ?>
				<div class="sub-topics"><?php the_field('sub_heading_2', 'option'); ?></div>
			<?php endif; ?>

				<?php while (have_rows('date_time_column', 'option')) : the_row(); ?>
				<?php if (get_sub_field('day') && get_sub_field('time')) : ?>
					<div class="content-wrapper">
						<div class="date_time_column"><?php the_sub_field('day'); ?> 
						<span><?php the_sub_field('time'); ?></span>
					</div>
					</div>
				<?php endif; ?>
				<?php endwhile; ?>
			</div>

			<div class="col-lg-3 col">
			<?php if (get_field('sub_heading_3', 'option')) : ?>
				<div class="sub-topics"><?php the_field('sub_heading_3', 'option'); ?></div>
			<?php endif; ?>

			<?php if (get_field('address_1', 'option')) : ?>
				<div class="address"><?php the_field('address_1', 'option'); ?></div>
			<?php endif; ?>

			<?php if (get_field('address_2', 'option')) : ?>
				<div class="address"><?php the_field('address_2', 'option'); ?></div>
			<?php endif; ?>
				
			</div>

			<div class="col-lg-3 col">
			<?php if (get_field('sub_heading_4', 'option')) : ?>
				<div class="sub-topics"><?php the_field('sub_heading_4', 'option'); ?></div>
			<?php endif; ?>	
			<!-- <div class="social-media-1"><?php get_template_part('templates/social', 'media'); ?></div>			 -->
				
				<!-- <div class="social-media-1">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
            </div> -->
				<div class="maya">
					<p class="maya-wrapper"><a href="https://www.maya.lk/" target="_blank">Website By <img src="<?php echo THEME_IMAGES; ?>edm.png" alt="Maya.lk"></a></p>
					<div class="copyrights">
						<p class="copyrights-text"><?php echo str_replace('[year]', date('Y'), get_field('copyrights_text', 'option')); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>