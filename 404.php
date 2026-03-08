<?php get_header(); ?>

<section class="section-padding" style="padding-top:10rem;text-align:center;min-height:80vh;display:flex;align-items:center;justify-content:center;">
    <div>
        <h1 style="font-size:6rem;font-weight:700;" class="text-gradient-gold">404</h1>
        <p style="color:var(--muted);font-size:1.25rem;margin:1rem 0 2rem;">The page you're looking for doesn't exist.</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-gold">Go Home</a>
    </div>
</section>

<?php get_footer(); ?>
