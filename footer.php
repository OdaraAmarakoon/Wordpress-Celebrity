<footer class="main-footer" id="footer">
	<div class="container">
		<div class="row">
			<?php $formID = get_field('schedule_form', 'option'); ?>
			<div class="col-lg-3">
			<h6 class="footer-topics"></h6>
				
			</div>
			<div class="col-lg-3">
				
			</div>
			<div class="col-lg-3">
				
			</div>
			<div class="col-lg-3">
				<div class="copyrights">
					<p class="copyrights-text"><?php echo str_replace('[year]', date('Y'), get_field('copyrights_text', 'option')); ?></p>
					<p class="maya-wrapper"><a href="https://www.maya.lk/" target="_blank">Website By <img src="<?php echo THEME_IMAGES; ?>maya.png" alt="Maya.lk"></a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</div>
</body>

</html>