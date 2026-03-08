<?php get_header(); ?>

<article class="section-padding" style="padding-top:7rem;">
    <div class="container" style="max-width:48rem;">
        <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="section-title" style="margin-bottom:2rem;"><?php the_title(); ?></h1>
        <div style="color:var(--muted);font-size:0.9375rem;line-height:1.8;">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
    </div>
</article>

<?php get_footer(); ?>
