<?php get_header();?>

<main>
        <section>
<?php
            while (have_posts()) {
	            the_post(); ?>
					<h1><?php wp_title(); ?></h1>
                     <p><?php the_content(); ?></p>            
        <?php } ?>
        </section>
</main>
<?php get_footer();?>