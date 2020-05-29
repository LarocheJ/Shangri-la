<footer>
    <?php wp_footer(); ?>

    <div class="booknow-container">

        <h4>Book Now!</h4>
        <ul>
            <li><a href="http://localhost/sites/shangri-la/wordpress/book-now/">Easily book a room with our online
                    form!</a></li>
            <li>0590.25.83.14</li>
            <li>contact@shangrila.com</li>
        </ul>

    </div>

    <div class="social-container">

        <h4>Social</h4>
        <div>

            <a href="https://www.facebook.com/"><img
                    src="<?php print get_template_directory_uri(); ?>/images/facebook.svg" alt="facebook icon"></a>
            <a href="https://twitter.com/?lang=en"><img
                    src="<?php print get_template_directory_uri(); ?>/images/twitter.svg" alt="twitter icon"></a>
            <a href="https://www.instagram.com/"><img
                    src="<?php print get_template_directory_uri(); ?>/images/instagram.svg" alt="instagram icon"></a>

        </div>

    </div>

    <div class="sitemap-container">

        <h4>Sitemap</h4>
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-navigation',
                    'container' => 'nav',
                )
            );
        ?>

    </div>

</footer>

<div class="copyright">

    <p>Photographs by Easa Shamih, Raj Deutunder, and Paryitno under a Creative Commons Attribution 2.0 Generic &lpar;CC
        BY 2.0&rpar; license, Island resort image from <a
            href="https://pixabay.com/photos/bora-bora-island-caribbean-tahiti-3023437/">Pixabay</a>, Beach bar image
        from <a href="https://pixabay.com/photos/beach-maldives-bar-2245867/">Pixabay</a>, Shark image from <a
            href="https://pixabay.com/photos/whale-shark-shark-aquarium-water-281498/">Pixabay</a>, beach books image
        from <a href="https://pixabay.com/photos/books-reading-beach-vacation-918521/">Pixabay</a>, social icons from <a
            href="https://fontawesome.com/">Fontawesome</a></p>

</div>

<script defer async
    src="http://api.openweathermap.org/data/2.5/weather?q=Basse-Terre&appID=91f05e4330f6e85cab273b8b1ad8bb71&units=metric&callback=displayWeather">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRYhkASG4k8H08cIW-bVdOPqAYn4nyDiY&callback=initMap">
</script>

</body>

</html>