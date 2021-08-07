<?php

/* Template Name: Email Form */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="container-fluid px-md-5 position-relative overflow-hidden graybg borderbottom">

<div class="py-5"></div>
<div class="py-5"></div>

<div class="row justify-content-center">
<div class="col-12 col-md-8 px-md-5">

<?php echo get_post_field('post_content', $post->ID); ?>

</div>

<div class="py-5"></div>
<div class="py-5"></div>
<div class="py-5"></div>

</div>
</div>
<?php get_footer(); ?>
</main>


