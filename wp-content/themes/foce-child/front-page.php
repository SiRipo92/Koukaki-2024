<?php

get_header();
?>
<main id="primary" class="site-main">
<!-- Section "hero-banner" -->
    <section class="hero-header">
        <div class="banner-container">
            <div class="banner">
                <video autoplay muted loop id="hero_video">
                    <source src="<?php echo get_stylesheet_directory_uri(). '/assets/videos/banner-video.mp4'; ?>" type="video/mp4">
                 </video>
            </div>
            <div class ="hero_logo">
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants" id="logo">
            </div>
        </div>
    </section>

<!-- Section "story" -->
    <section id="#story" class="story">
        <span><h2>L'histoire</h2></span>
        <article id="story-text" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

<!-- Section "characters" with slider -->
        <?php get_template_part('template-partials/page-characters'); ?>

<!-- Section "place" -->
            <article id="place" class="story__place">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>

<!-- Section "studio" -->
        <section id="studio" class= "studio">
            <h2>Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

<!-- Section "oscars-nomination" -->
        <section id="oscars-nomination" class="studio__nomination">
            <div class="studio__nomination-container">
                <h3>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
            </div>
            <div>
                <img src="<?php echo get_stylesheet_directory_uri(). '/assets/images/oscars.png'; ?>" alt="Oscars 2022" id="oscars">
            </div>
        </section>
    </main><!-- #main -->

<?php
get_footer();
