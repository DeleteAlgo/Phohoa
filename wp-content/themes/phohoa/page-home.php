<?php

/**
 * Template Name: Home Page
 * Description: A custom template for the home page.
 */

get_header(); ?>

<main id="main" class="site-main">
    <section class="home-hero">
        <div class="container-full-width">
            <div class="slider">
                <!-- Left Navigation Button -->
                <button class="slider-nav prev" aria-label="Previous Slide"><i class="fa-solid fa-chevron-left"></i></button>

                <!-- Slides -->
                <div class="slide active">
                    <img src="wp-content/uploads/2025/10/phohoa-banner-image.jpg" alt="Slide 1">
                    <div class="slide-caption">
                        <h2>Health Conscious Choice</h2>
                        <p>Enjoy the rich, comforting flavors of traditional Vietnamese pho made with fresh ingredients, balanced nutrition, and a focus on your well-being — because great taste starts with healthy choices.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="wp-content/uploads/2025/10/franchise-with-us-banner-image.jpg" alt="Slide 2">
                    <div class="slide-caption">
                        <h2>Franchise With Us</h2>
                        <p>Join a globally loved Vietnamese restaurant brand built on authentic flavors and community spirit. <br>Partner with us and bring the Pho Hoa experience to your neighborhood.</p>
                    </div>
                </div>

                <!-- Right Navigation Button -->
                <button class="slider-nav next" aria-label="Next Slide"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <section class="home-content">
        <div class="container">
            <?php
            // Display the page content
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>