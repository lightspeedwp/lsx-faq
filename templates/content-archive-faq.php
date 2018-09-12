<?php
/**
 * @package lsx-faq
 */
?>

<?php
	global $lsx_faq;

	$doc_categories = '';
	$doc_categories_class = '';
	$terms = get_the_terms( get_the_ID(), 'faq-category' );

if ( $terms && ! is_wp_error( $terms ) ) {
		$doc_categories = array();
		$doc_categories_class = array();

	foreach ( $terms as $term ) {
			$doc_categories[] = '<a href="' . get_term_link( $term ) . '">' . $term->name . '</a>';
			$doc_categories_class[] = 'filter-' . $term->slug;
	}

		$doc_categories = join( ', ', $doc_categories );
		$doc_categories = join( ' ', $doc_categories );
}
?>

<div class="col-xs-12 col-sm-6 col-md-4 lsx-faq-column <?php echo esc_attr( $doc_categories_class ); ?>">
	<article class="lsx-faq-slot">
		<?php if ( ! empty( lsx_get_thumbnail( 'lsx-thumbnail-single' ) ) ) : ?>
			<?php if ( ! isset( $lsx_faq_frontend->options['display'] ) || ! $lsx_faq_frontend->options['display']['team_disable_single'] ) : ?>
				<a href="<?php the_permalink(); ?>"><figure class="lsx-faq-avatar"><?php lsx_thumbnail( 'lsx-thumbnail-single' ); ?></figure></a>
			<?php else : ?>
				<figure class="lsx-faq-avatar"><?php lsx_thumbnail( 'lsx-thumbnail-single' ); ?></figure>
			<?php endif; ?>
		<?php endif; ?>

		<h5 class="lsx-faq-title">
			<?php if ( ! isset( $lsx_faq_frontend->options['display'] ) || ! $lsx_faq_frontend->options['display']['team_disable_single'] ) : ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php else : ?>
				<?php the_title(); ?>
			<?php endif; ?>
		</h5>

		<?php if ( ! empty( $doc_categories ) ) : ?>
			<p class="lsx-faq-category"><?php echo wp_kses_post( $doc_categories ); ?></p>
		<?php endif; ?>
		<div class="archive-doc-cat">
			<?php
			$terms = get_the_terms( $post->ID, 'faq-category' );
			foreach ( $terms as $term ) {

				echo esc_attr( $term->name );

			}

		?>
</div>

		<div class="lsx-faq-content"><a href="<?php the_permalink(); ?>" class="moretag"><?php esc_html_e( 'View Faq', 'lsx-faq' ); ?></a></div>
	</article>
</div>