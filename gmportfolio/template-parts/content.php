<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GMPortfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class = "entry-title">
			<?php
			//in here we can write php code and mix with html
			//the_title();
			?>
	</header><!-- .entry-header -->

	<?php gmportfolio_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
