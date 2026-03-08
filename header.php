<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mohit Swami — Digital Media Strategist, Founder of Food Mood Media, Creator of Voice of Swami">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Navbar -->
<nav class="navbar" id="navbar">
    <div class="navbar-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-logo">
            <span class="text-gradient-gold">Mohit Swami</span>
        </a>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#foodmood">Food Mood Media</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#travel">Travel</a>
            <a href="#news">News Unfolded</a>
            <a href="#blog">Blog</a>
            <a href="#work">Work With Me</a>
            <a href="#contact">Contact</a>
        </div>
        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle menu">☰</button>
    </div>
    <div class="mobile-menu" id="mobileMenu">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#foodmood">Food Mood Media</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#travel">Travel</a>
        <a href="#news">News Unfolded</a>
        <a href="#blog">Blog</a>
        <a href="#work">Work With Me</a>
        <a href="#contact">Contact</a>
    </div>
</nav>
