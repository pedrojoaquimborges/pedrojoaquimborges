<?php
/**
 *
 * @package PJB
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<header class="single-header clr"></header>

<div class="singlepostspacer"></div>

<article class="single-content clr">

<div class="py-5 py-md-0"></div>


<div class="container-fluid graybg-sm px-4 px-md-0">
<div class="headermargin">


<div class="row posttopcont px-0 m-0">

<div class="row col-12 col-md-6 px-0 m-0 justify-content-center align-items-center posttopimgcont">
<div class="col-12 col-md-6 px-0"><img src="
<?php 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
echo $thumb_url;
?>
"></div>
</div>

<div class="row col-12 col-md-6 px-0 m-0 mb-md-0 justify-content-center align-items-center posttoptitlecont">
<div class="col-12 py-5 col-md-8 px-0 py-md-0">
<div class="p5"><?php echo get_the_title( $post_id ); ?></div>
<div class="fs-6 pt-2 text-uppercase fw-600 ltsp-sm">
<?php 
$value = get_field( "subtitle" );
if( $value ) {
    echo $value;
} else {
    echo 'empty';
}
?>
</div>
</div></div>
</div>

<div class="py-md-5 pb-5"></div>

<div class="row g-0 justify-content-center">
<div class="posttext col-12 col-md-12 col-lg-6 px-md-5 px-lg-0 g-0">

<?php the_content('full'); ?>

</div></div>

<div class="row justify-content-center g-0 fs-7 lh-sm graytext pt-3 pt-md-5">
<div class="row col-md-6 col-12 px-0">
<div class="col-7 col-md-5 pe-4 d-inline-block px-0">
<?php echo get_the_title( $post_id ); ?>
</div>
<div class="col-4 col-md-5 d-inline-block px-0">
<?php echo get_the_date( 'Y-m-d' ); ?>
</div></div></div>

</div>
</div>


<div class="py-5"></div><div class="py-md-5"></div>

</article>



<?php get_footer(); ?>

</main>

			<!-- <?php the_post_navigation(); ?>

			<?php if ( comments_open() || get_comments_number() ) : ?>

				<?php comments_template(); ?> 
				
			<?php endif; ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
