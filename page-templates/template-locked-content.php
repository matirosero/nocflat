<?php
/**
 * Template Name: Locked content
 * The template for displaying content locked to admins and customers.
 *
 * @package themify
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<?php
/** Themify Default Variables
 *  @var object */
global $themify; ?>

<!-- layout-container -->
<div id="layout" class="pagewidth clearfix">



	<?php themify_content_before(); // hook ?>
	<!-- content -->
	<div id="content" class="clearfix">
    	<?php themify_content_start(); // hook ?>

		<?php
		/////////////////////////////////////////////
		// PAGE
		/////////////////////////////////////////////
		?>
		<?php if ( ! is_404() && have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="page-<?php the_ID(); ?>" class="type-page">


				<?php if ( mro_noc_has_frontend_access() ): ?>


					<!-- page-title -->
					<?php if($themify->page_title != "yes"): ?>

						<time datetime="<?php the_time( 'o-m-d' ); ?>"></time>
						<h1 class="page-title"><?php the_title(); ?></h1>
					<?php endif; ?>
					<!-- /page-title -->

					<div class="page-content entry-content">

						<?php if ( $themify->hide_page_image != 'yes' && has_post_thumbnail() ) : ?>
							<figure class="post-image"><?php themify_image( "{$themify->auto_featured_image}w={$themify->image_page_single_width}&h={$themify->image_page_single_height}&ignore=true" ); ?></figure>
						<?php endif; ?>

						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => '<p class="post-pagination"><strong>'.__('Pages:','themify').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

						<?php edit_post_link(__('Edit','themify'), '[', ']'); ?>

					</div>
					<!-- /.post-content -->

				<?php else: ?>

					<h1 class="page-title">¡Disculpe!</h1>

					<p>Usted no tiene privilegios para ver esta página.</p>

				<?php endif; ?>


			</div><!-- /.type-page -->
		<?php endwhile; endif; ?>


		<?php themify_content_end(); // hook ?>
	</div>
	<!-- /content -->
    <?php themify_content_after(); // hook ?>

	<?php
	/////////////////////////////////////////////
	// Sidebar
	/////////////////////////////////////////////
	if ($themify->layout != 'sidebar-none'): get_sidebar(); endif; ?>

</div>
<!-- /layout-container -->

<?php get_footer(); ?>
