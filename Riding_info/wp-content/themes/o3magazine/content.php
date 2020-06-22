<?php

/**

 * The default template for displaying content

 *

 * Used for both single and index/archive/search.

 *

 * @package WordPress

 * @subpackage o3magazine

 * @since o3magazine 1.0

 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

		// Post thumbnail.

		o3magazine_post_thumbnail();

	?>



	<header class="entry-header">

		<?php

			if ( is_single() ) :

				the_title( '<h1 class="entry-title">', '</h1>' );

			else :

				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

			endif;

		?>

	</header><!-- .entry-header -->



	<div class="entry-content">

		<?php

			/* translators: %s: Name of current post */

			the_content( sprintf(

				__( 'Continue reading %s', 'o3magazine' ),

				the_title( '<span class="screen-reader-text">', '</span>', false )

			) );



			wp_link_pages( array(

				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'o3magazine' ) . '</span>',

				'after'       => '</div>',

				'link_before' => '<span>',

				'link_after'  => '</span>',

				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'o3magazine' ) . ' </span>%',

				'separator'   => '<span class="screen-reader-text">, </span>',

			) );

		?>

	</div><!-- .entry-content -->



	<?php

		// Author bio.

		if ( is_single() && get_the_author_meta( 'description' ) ) :

			get_template_part( 'author-bio' );

		endif;

	?>



	<footer class="entry-footer">

		<?php o3magazine_entry_meta(); ?>

		<?php edit_post_link( __( 'Edit', 'o3magazine' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->



</article><!-- #post-## -->

