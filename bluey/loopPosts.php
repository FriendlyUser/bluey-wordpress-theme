<?php if (have_posts()): while (have_posts()) : the_post(); ?>



	<br />

	<br />

	<br />

	<div id="post-<?php the_ID(); ?>" class="inline-block max-w-sm rounded overflow-hidden shadow-lg">
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<img class="w-full" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title(); ?>">
			</a>
		<?php endif; ?>
		<div class="px-6 py-4">
			<div class="font-bold text-xl mb-2"><?php the_title(); ?></div>
			<p class="text-gray-700 text-base">
				<?php the_excerpt() ?>
			</p>
		</div>
		<div class="px-6 py-4">
			<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
				<?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?>
			</span>
			<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
				<?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?>
			</span>
			<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700"><?php edit_post_link(); ?></span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 
      <?php if (get_comments_number() == 0) { echo 'hidden'; } ?>">
        <?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?>
        </span>
		</div>
	</div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>