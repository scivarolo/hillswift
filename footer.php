			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					<?php if( is_single() ) : ?>
						<div class="post-navigation"><p><span class="previous-post"><?php previous_post_link('< %', '', 'no'); ?></span> <span class="next-post"><?php next_post_link('% >', '', 'no'); ?></span><p></div>
					<?php endif; ?>
					
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
