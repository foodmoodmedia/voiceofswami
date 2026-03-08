<?php get_header(); ?>

<article class="section-padding" style="padding-top:7rem;">
    <div class="container" style="max-width:48rem;">
        <?php while ( have_posts() ) : the_post(); ?>
        <p class="section-label"><?php $cats = get_the_category(); echo ! empty( $cats ) ? esc_html( $cats[0]->name ) : ''; ?></p>
        <h1 class="section-title" style="margin-bottom:1rem;"><?php the_title(); ?></h1>
        <p style="color:var(--muted);font-size:0.875rem;margin-bottom:2rem;"><?php echo get_the_date( 'F j, Y' ); ?> · <?php echo esc_html( get_the_author() ); ?></p>

        <?php if ( has_post_thumbnail() ) : ?>
        <div style="border-radius:1rem;overflow:hidden;margin-bottom:2rem;">
            <?php the_post_thumbnail( 'large' ); ?>
        </div>
        <?php endif; ?>

        <div style="color:var(--muted);font-size:0.9375rem;line-height:1.8;">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>

        <div style="margin-top:3rem;text-align:center;">
            <a href="<?php echo esc_url( home_url( '/#blog' ) ); ?>" class="btn-outline-gold">← Back to Blog</a>
        </div>
    </div>
</article>

<?php get_footer(); ?>
