<?php get_header(); ?>

<!-- ===== HERO ===== -->
<section id="home" class="hero">
    <?php
    $video_id = get_theme_mod( 'hero_video' );
    if ( $video_id ) :
        $video_url = wp_get_attachment_url( $video_id );
    ?>
    <video autoplay muted loop playsinline class="hero-video">
        <source src="<?php echo esc_url( $video_url ); ?>" type="video/mp4">
    </video>
    <?php endif; ?>
    <div class="hero-overlay"></div>
    <div class="hero-gradient"></div>

    <div class="hero-content">
        <div class="hero-text">
            <p class="section-label"><?php echo esc_html__( 'Digital Media Strategist', 'voiceofswami' ); ?></p>
            <h1>
                <?php
                $headline = get_theme_mod( 'hero_headline', 'Building Digital Media, Stories & Businesses' );
                // Split into colored words
                $headline = str_replace( 'Stories', '<span class="text-gradient-gold">Stories</span>', $headline );
                $headline = str_replace( 'Businesses', '<span class="text-gradient-blue">Businesses</span>', $headline );
                echo wp_kses_post( $headline );
                ?>
            </h1>
            <p class="subtitle"><?php echo esc_html( get_theme_mod( 'hero_subheadline', "I'm Mohit Swami — Digital Media Strategist, Founder of Food Mood Media and Creator of Voice of Swami." ) ); ?></p>
            <div class="hero-buttons">
                <a href="#work" class="btn-gold">Work With Me</a>
                <a href="#portfolio" class="btn-outline-gold">View Portfolio</a>
            </div>
        </div>
        <div class="hero-photo">
            <div class="hero-photo-circle">
                <?php
                $photo_id = get_theme_mod( 'hero_photo' );
                if ( $photo_id ) :
                    echo wp_get_attachment_image( $photo_id, 'hero-photo' );
                else :
                ?>
                <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:var(--muted);">Photo</div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="scroll-indicator">
        <div class="scroll-dot"><span></span></div>
    </div>
</section>

<!-- ===== ABOUT ===== -->
<section id="about" class="section-padding fade-in">
    <div class="container">
        <div class="about-grid">
            <div class="about-photo">
                <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'large' ); else : ?>
                <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:var(--bg-card);color:var(--muted);">About Photo</div>
                <?php endif; ?>
            </div>
            <div>
                <p class="section-label">About Me</p>
                <h2 class="section-title">I'm <span class="text-gradient-gold">Mohit Swami</span></h2>
                <div class="about-text">
                    <p>A passionate Digital Media Strategist from Sagar, Madhya Pradesh, building brands, telling stories, and creating impact through the power of digital media.</p>
                    <p>I founded Food Mood Media to help restaurants, cafes and hotels grow their digital presence. As the creator of Voice of Swami, I share insights on media, marketing and storytelling. I also launched News Unfolded — an independent digital news initiative focused on local journalism and RTI investigations.</p>
                </div>
                <div class="about-tags">
                    <span class="about-tag">📱 Food Mood Media</span>
                    <span class="about-tag">🎙️ Voice of Swami</span>
                    <span class="about-tag">📰 News Unfolded</span>
                    <span class="about-tag">✈️ Travel Storyteller</span>
                    <span class="about-tag">🎤 TEDx Speaker</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FOOD MOOD MEDIA ===== -->
<section id="foodmood" class="section-padding bg-muted-section fade-in">
    <div class="container" style="text-align:center;">
        <p class="section-label">Digital Marketing Agency</p>
        <h2 class="section-title"><span class="text-gradient-gold">Food Mood</span> Media</h2>
        <p style="color:var(--muted);max-width:40rem;margin:1rem auto 0;font-size:0.9375rem;">Helping cafes, hotels and local businesses grow their online presence with strategic digital marketing.</p>

        <div class="services-grid">
            <div class="glass-card service-card">
                <div class="service-icon">📱</div>
                <h3>Social Media Management</h3>
                <p>Complete social media handling for restaurants, cafes and hotels.</p>
            </div>
            <div class="glass-card service-card">
                <div class="service-icon">📈</div>
                <h3>Instagram Growth Strategy</h3>
                <p>Data-driven strategies to grow your audience organically.</p>
            </div>
            <div class="glass-card service-card">
                <div class="service-icon">🎬</div>
                <h3>Reel Creation & Video Editing</h3>
                <p>Trending reels and professional video content for your brand.</p>
            </div>
            <div class="glass-card service-card">
                <div class="service-icon">🌐</div>
                <h3>Website Design for Hotels & Cafes</h3>
                <p>Modern, fast websites that convert visitors into customers.</p>
            </div>
            <div class="glass-card service-card">
                <div class="service-icon">🎨</div>
                <h3>Local Business Branding</h3>
                <p>Complete brand identity design for local businesses.</p>
            </div>
        </div>
        <div style="margin-top:3rem;">
            <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'whatsapp_number', '919685602735' ) ); ?>?text=Hi%2C%20I%20want%20to%20book%20a%20free%20consultation" class="btn-gold">Book Free Consultation</a>
        </div>
    </div>
</section>

<!-- ===== PORTFOLIO ===== -->
<section id="portfolio" class="section-padding fade-in">
    <div class="container" style="text-align:center;">
        <p class="section-label">Our Work</p>
        <h2 class="section-title">Featured <span class="text-gradient-gold">Portfolio</span></h2>

        <div class="portfolio-grid">
            <?php
            $portfolio = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 6 ) );
            if ( $portfolio->have_posts() ) :
                while ( $portfolio->have_posts() ) : $portfolio->the_post();
            ?>
            <div class="glass-card portfolio-card">
                <div class="portfolio-img">
                    <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'portfolio-thumb' ); else : ?>
                    <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:var(--bg-card);color:var(--muted);">Project</div>
                    <?php endif; ?>
                </div>
                <div class="portfolio-info">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words( get_the_excerpt(), 12 ); ?></p>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();
            else :
                // Fallback static portfolio
                $projects = array(
                    array( 'Hotel Starter Website', 'Full website design and development for a boutique hotel.' ),
                    array( 'Instagram Growth Campaign', 'Grew a cafe brand from 500 to 10K followers in 90 days.' ),
                    array( 'Cafe Reel Marketing', 'Viral reel campaign generating 1M+ views for a local cafe.' ),
                );
                foreach ( $projects as $p ) :
            ?>
            <div class="glass-card portfolio-card">
                <div class="portfolio-img">
                    <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:var(--bg-card);color:var(--muted);aspect-ratio:16/10;">Project</div>
                </div>
                <div class="portfolio-info">
                    <h3><?php echo esc_html( $p[0] ); ?></h3>
                    <p><?php echo esc_html( $p[1] ); ?></p>
                </div>
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>

<!-- ===== TRAVEL ===== -->
<section id="travel" class="section-padding bg-muted-section fade-in">
    <div class="container" style="text-align:center;">
        <p class="section-label">Travel Project</p>
        <h2 class="section-title">100 Days of <span class="text-gradient-gold">Freedom</span></h2>
        <p style="color:var(--muted);max-width:40rem;margin:1rem auto 0;font-size:0.9375rem;">A journey across India — documenting stories, cultures and hidden gems through the lens of a storyteller.</p>

        <div class="travel-grid">
            <?php
            $travel = new WP_Query( array( 'post_type' => 'travel_story', 'posts_per_page' => 3 ) );
            if ( $travel->have_posts() ) :
                while ( $travel->have_posts() ) : $travel->the_post();
            ?>
            <div class="glass-card travel-card">
                <div class="travel-thumb">
                    <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'travel-thumb' ); else : ?>
                    <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:var(--bg-card);color:var(--muted);">Travel</div>
                    <?php endif; ?>
                    <button class="play-btn" aria-label="Play">▶</button>
                </div>
                <div class="travel-info">
                    <h3><?php the_title(); ?></h3>
                    <p>📍 <?php echo wp_trim_words( get_the_excerpt(), 5 ); ?></p>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();
            else :
                $stories = array(
                    array( 'Himalayan Dawn', 'Himachal Pradesh' ),
                    array( 'Golden Sands of Rajasthan', 'Jaisalmer' ),
                    array( 'Into the Wild', 'Madhya Pradesh' ),
                );
                foreach ( $stories as $s ) :
            ?>
            <div class="glass-card travel-card">
                <div class="travel-thumb">
                    <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:var(--bg-card);color:var(--muted);aspect-ratio:16/10;">Travel</div>
                    <button class="play-btn" aria-label="Play">▶</button>
                </div>
                <div class="travel-info">
                    <h3><?php echo esc_html( $s[0] ); ?></h3>
                    <p>📍 <?php echo esc_html( $s[1] ); ?></p>
                </div>
            </div>
            <?php endforeach; endif; ?>
        </div>
        <div style="margin-top:3rem;">
            <a href="<?php echo esc_url( get_theme_mod( 'instagram_travel', 'https://www.instagram.com/journeyofswami/' ) ); ?>" target="_blank" class="btn-blue">Follow the Journey</a>
        </div>
    </div>
</section>

<!-- ===== NEWS UNFOLDED ===== -->
<section id="news" class="section-padding fade-in">
    <div class="container" style="text-align:center;">
        <p class="section-label">Digital Journalism</p>
        <h2 class="section-title"><span class="text-gradient-blue">News</span> Unfolded</h2>
        <p style="color:var(--muted);max-width:40rem;margin:1rem auto 0;font-size:0.9375rem;">Independent digital journalism — covering local news, RTI investigations and civic awareness.</p>

        <div class="news-grid">
            <div class="glass-card news-card">
                <div class="news-icon">📰</div>
                <h3>Local News Coverage</h3>
                <p>In-depth reporting on local governance and development stories from Madhya Pradesh.</p>
                <a href="<?php echo esc_url( get_theme_mod( 'instagram_news', 'https://www.instagram.com/news.unfolded/' ) ); ?>" target="_blank" class="news-link">Read More →</a>
            </div>
            <div class="glass-card news-card">
                <div class="news-icon">🔍</div>
                <h3>RTI Investigations</h3>
                <p>Transparency-driven journalism using Right to Information to uncover civic issues.</p>
                <a href="<?php echo esc_url( get_theme_mod( 'instagram_news', 'https://www.instagram.com/news.unfolded/' ) ); ?>" target="_blank" class="news-link">Read More →</a>
            </div>
            <div class="glass-card news-card">
                <div class="news-icon">🏛️</div>
                <h3>Civic Awareness</h3>
                <p>Empowering citizens with knowledge about their rights and local governance.</p>
                <a href="<?php echo esc_url( get_theme_mod( 'instagram_news', 'https://www.instagram.com/news.unfolded/' ) ); ?>" target="_blank" class="news-link">Read More →</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== BLOG ===== -->
<section id="blog" class="section-padding bg-muted-section fade-in">
    <div class="container" style="text-align:center;">
        <p class="section-label">Insights</p>
        <h2 class="section-title">Latest from the <span class="text-gradient-gold">Blog</span></h2>

        <div class="blog-tags">
            <span class="blog-tag">Digital Marketing</span>
            <span class="blog-tag">AI Tools for Creators</span>
            <span class="blog-tag">Travel Stories</span>
            <span class="blog-tag">Media & Journalism</span>
        </div>

        <div class="blog-grid">
            <?php
            $blog = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 4 ) );
            if ( $blog->have_posts() ) :
                while ( $blog->have_posts() ) : $blog->the_post();
                $cats = get_the_category();
                $cat_name = ! empty( $cats ) ? $cats[0]->name : 'General';
            ?>
            <div class="glass-card blog-card">
                <div class="blog-category"><?php echo esc_html( strtoupper( $cat_name ) ); ?></div>
                <h3><?php the_title(); ?></h3>
                <div class="blog-meta">
                    <span><?php echo get_the_date( 'M j, Y' ); ?></span>
                    <a href="<?php the_permalink(); ?>" class="blog-read">Read →</a>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();
            else :
                $posts = array(
                    array( 'Digital Marketing', '5 Instagram Reels Strategies That Actually Work in 2025', 'Mar 2, 2026' ),
                    array( 'AI Tools for Creators', 'Top 10 AI Tools Every Content Creator Must Know', 'Feb 20, 2026' ),
                    array( 'Travel Stories', 'Why I Left Everything for 100 Days of Travel', 'Feb 10, 2026' ),
                    array( 'Media & Journalism', 'The Future of Independent Digital News in India', 'Jan 28, 2026' ),
                );
                foreach ( $posts as $p ) :
            ?>
            <div class="glass-card blog-card">
                <div class="blog-category"><?php echo esc_html( strtoupper( $p[0] ) ); ?></div>
                <h3><?php echo esc_html( $p[1] ); ?></h3>
                <div class="blog-meta">
                    <span><?php echo esc_html( $p[2] ); ?></span>
                    <a href="#" class="blog-read">Read →</a>
                </div>
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>

<!-- ===== WORK WITH ME ===== -->
<section id="work" class="section-padding fade-in">
    <div class="container" style="text-align:center;">
        <p class="section-label">Collaborate</p>
        <h2 class="section-title">Work <span class="text-gradient-gold">With Me</span></h2>

        <div class="work-grid">
            <div class="glass-card work-card">
                <div class="work-icon">📱</div>
                <h3>Social Media Marketing</h3>
                <p>Complete social media strategy and management.</p>
            </div>
            <div class="glass-card work-card">
                <div class="work-icon">🎬</div>
                <h3>Video Editing</h3>
                <p>Professional video editing and reel creation.</p>
            </div>
            <div class="glass-card work-card">
                <div class="work-icon">🌐</div>
                <h3>Website Design</h3>
                <p>Modern, responsive website design and development.</p>
            </div>
            <div class="glass-card work-card">
                <div class="work-icon">🤝</div>
                <h3>Brand Partnerships</h3>
                <p>Collaborations and sponsored content creation.</p>
            </div>
        </div>

        <div class="work-buttons">
            <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'whatsapp_number', '919685602735' ) ); ?>?text=Hi%20Mohit%2C%20I%20want%20to%20work%20with%20you" target="_blank" class="btn-gold">💬 WhatsApp</a>
            <a href="mailto:<?php echo esc_attr( get_theme_mod( 'email_vos', 'voiceofswami.business@gmail.com' ) ); ?>" class="btn-outline-gold">📧 Email</a>
            <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'whatsapp_number', '919685602735' ) ); ?>?text=Hi%2C%20I%20want%20to%20book%20a%20consultation" target="_blank" class="btn-blue">📅 Book Consultation</a>
        </div>
    </div>
</section>

<!-- ===== CONTACT ===== -->
<section id="contact" class="section-padding bg-muted-section fade-in">
    <div class="container">
        <div style="text-align:center;margin-bottom:3rem;">
            <p class="section-label">Get in Touch</p>
            <h2 class="section-title">Let's <span class="text-gradient-gold">Connect</span></h2>
        </div>

        <div class="contact-grid">
            <form class="contact-form" id="contactForm">
                <input type="text" name="name" placeholder="Your Name" required class="contact-input">
                <input type="email" name="email" placeholder="Your Email" required class="contact-input">
                <input type="tel" name="phone" placeholder="Phone Number" class="contact-input">
                <textarea name="message" placeholder="Your Message" rows="4" required class="contact-input"></textarea>
                <button type="submit" class="btn-gold" style="width:100%;">✉️ Send Message</button>
            </form>

            <div style="display:flex;flex-direction:column;justify-content:center;">
                <h3 style="font-size:1.5rem;font-weight:600;margin-bottom:1.5rem;">Connect on Social</h3>
                <div class="social-icons">
                    <a href="<?php echo esc_url( get_theme_mod( 'instagram_vos', 'https://www.instagram.com/voiceofswami.official/' ) ); ?>" target="_blank" class="social-icon" aria-label="Instagram">📷</a>
                    <a href="<?php echo esc_url( get_theme_mod( 'youtube', 'https://youtube.com/@voiceofswami' ) ); ?>" target="_blank" class="social-icon" aria-label="YouTube">▶️</a>
                    <a href="<?php echo esc_url( get_theme_mod( 'linkedin', 'https://linkedin.com/in/mohitswami' ) ); ?>" target="_blank" class="social-icon" aria-label="LinkedIn">in</a>
                    <a href="<?php echo esc_url( get_theme_mod( 'twitter', 'https://twitter.com/voiceofswami' ) ); ?>" target="_blank" class="social-icon" aria-label="Twitter">𝕏</a>
                </div>
                <div class="contact-info">
                    <p>📧 <?php echo esc_html( get_theme_mod( 'email_vos', 'voiceofswami.business@gmail.com' ) ); ?></p>
                    <p>📧 <?php echo esc_html( get_theme_mod( 'email_fmm', 'foodmoodmedia@gmail.com' ) ); ?></p>
                    <p>📧 <?php echo esc_html( get_theme_mod( 'email_news', 'newsunfolded.official@gmail.com' ) ); ?></p>
                    <p>📱 <?php echo esc_html( get_theme_mod( 'phone', '+91 9685602735' ) ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
