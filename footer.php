<!-- Footer -->
<footer class="footer">
    <div class="footer-grid">
        <div>
            <div class="footer-logo text-gradient-gold">Mohit Swami</div>
            <p class="footer-desc">Digital Media Strategist • Founder • Storyteller</p>
        </div>
        <div>
            <h4>Quick Links</h4>
            <div class="footer-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#foodmood">Food Mood Media</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#travel">Travel</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
        <div>
            <h4>Follow</h4>
            <div class="social-icons">
                <a href="<?php echo esc_url( get_theme_mod( 'instagram_vos', 'https://www.instagram.com/voiceofswami.official/' ) ); ?>" target="_blank" class="social-icon" aria-label="Instagram">📷</a>
                <a href="<?php echo esc_url( get_theme_mod( 'youtube', 'https://youtube.com/@voiceofswami' ) ); ?>" target="_blank" class="social-icon" aria-label="YouTube">▶️</a>
                <a href="<?php echo esc_url( get_theme_mod( 'linkedin', 'https://linkedin.com/in/mohitswami' ) ); ?>" target="_blank" class="social-icon" aria-label="LinkedIn">in</a>
                <a href="<?php echo esc_url( get_theme_mod( 'twitter', 'https://twitter.com/voiceofswami' ) ); ?>" target="_blank" class="social-icon" aria-label="Twitter">𝕏</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; <?php echo date( 'Y' ); ?> Mohit Swami. All rights reserved.
    </div>
</footer>

<!-- WhatsApp Float -->
<a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'whatsapp_number', '919685602735' ) ); ?>?text=Hi%20Mohit%2C%20I%20visited%20your%20website" target="_blank" class="whatsapp-float" aria-label="Chat on WhatsApp">💬</a>

<?php wp_footer(); ?>
</body>
</html>
