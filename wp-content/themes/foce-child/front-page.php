<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
                <img class="background-video background-fallback" src="<?php echo get_stylesheet_directory_uri() . '/assets/image/banner.png'; ?>" alt="fond koukaki mobile">
                <video class="background-video" autoplay loop muted poster="<?php echo get_stylesheet_directory_uri() . '/assets/image/banner.png'; ?>">
                    <source src="wp-content/themes/foce-child/assets/video/background-video.mp4"   type="video/mp4">
                </video>
            <img data-0="top:35%" data-450="top:58%" class="banner-logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">

            <script src='https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js'></script>
                <script>
                var s = skrollr.init();
                </script>
                
        </section>
        <section  id="story" class="story">
            <h2 class="title-story" data-0="opacity:0;" data-350="opacity:1;">L'histoire</h2>
            <article data-0="opacity:0;" data-350="opacity:1;" id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <article data-800="opacity:0;" data-1100="opacity:1;" id="characters">
                    <? get_template_part("template-part/personnage") ?>
            </article>
            <article data-1300="opacity:0;" data-1650="opacity:1;" id="place">
                <div>
                    <div class="nuages-anim">
                    <img data-1650="right:4%" data-2150="right:40%" class="gros-nuage" src="<?php echo get_stylesheet_directory_uri() . '/assets/image/big_cloud.png'; ?>" alt="gros nuage">
                    <img data-1650="right:40%" data-2150="right:67%" class="petit-nuage" src="<?php echo get_stylesheet_directory_uri() . '/assets/image/little_cloud.png'; ?>" alt="petit nuage">
                    </div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>

                    <script src='https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js'></script>
                <script>
                var s = skrollr.init();
                </script>

                </div>

            </article>
        </section>


        <section id="studio">
            <h2 data-2000="opacity:0;" data-2300="opacity:1;">Studio Koukaki</h2>
            <div data-2000="opacity:0;" data-2300="opacity:1;">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js'></script>
                <script>
                var s = skrollr.init();
                </script>

            </section>

            <section id="nomination" class="nomination">
                <img data-2300="opacity:0;" data-2500="opacity:1;" class="sunflower-nomination" src="<?php echo get_stylesheet_directory_uri() . '/assets/image/sunflower.png'; ?>" alt="sunflower">
                <img data-2300="opacity:0;" data-2500="opacity:1;" class="orchid-nomination" src="<?php echo get_stylesheet_directory_uri() . '/assets/image/orchid.png'; ?>" alt="orchid">
                <div data-2500="opacity:0;" data-2700="opacity:1;" class="nomination-div">
                    <img class="nomination-div-p-background" src="<?php echo get_stylesheet_directory_uri() . '/assets/image/background-nomination.png'; ?>" alt="fonds orange">
                    <p class="nomination-div-p">Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</p>
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/image-oscar.png'; ?>" alt="nomination oscar">
                </div>

                <script src='https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js'></script>
                <script>
                var s = skrollr.init();
                </script>
            </section>
    </main><!-- #main -->

<?php
get_footer();
