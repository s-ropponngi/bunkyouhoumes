<?php
get_header();
?>

<div class="main-wrap">
	<main class="main-area">
		<section class="main-visual">
			<div class="mv-inner">
				<h2 class="page-title"><?php the_title(); ?></h2>
			</div>
		</section>

		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></div>

		<?php if (have_posts()) :
			while (have_posts()) : the_post();
				get_template_part('template-parts/content');
			endwhile;
		endif; ?>
	</main>

	<aside class="widget">
		<?php get_sidebar(); ?>
	</aside>
</div>

<?php
get_footer();
