<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="well col-xs-4">
		<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="label label-primary"><?php the_date(); ?></p>
		<div>
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>