<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

<footer>
    <div class="footer-container">
        <div class="row">
            <div id="contact" class="footer-column col-md-12 col-sm-12">
                <div class="col"></div>

                <div class="contact-left col-md-2 col-sm-2">
                    <a href="<?php echo get_permalink( get_page_by_path( 'front-page' ))?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/OG-Dynamite.png" alt=""> </a>
                </div>
                <div class="contact-mid col-md-4 col-sm-4">
                    <h6>ABOUT SHOPPING</h6>
                    <a href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ))?>">Privacy Policy</a><br>
                    <a href="<?php echo get_permalink( get_page_by_path( 'refund_returns' ))?>">Refund and Return Policy</a><br>
                </div>
                <div class="contact-right col-md-4 col-sm-4">
                    <h6>E-SHOP</h6>
                    <a href="<?php echo get_permalink( get_page_by_path( 'shop' ))?>">Shop</a><br>
                    <a href="<?php echo get_permalink( get_page_by_path( 'cart' ))?>">Cart</a><br>
                    <a href="<?php echo get_permalink( get_page_by_path( 'checkout' ))?>">Chechout</a><br>
                </div>

                <div class="col"></div>
            </div>


    
        <div class="col-md-12 socials">
            <div class="col-5"></div>
            <div class="contact-left-down col-1">
                <a href="https://www.facebook.com/mostwantedrap"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/facebook-app-symbol.png" height="30px" widtht="30px" alt=""></a>
            </div>
            <div class="contact-left-down col-1">
                <a href="https://www.instagram.com/mostwantedrap/"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/instagram.png" height="30px" widtht="30px" alt=""></a>
            </div>
            <div class="contact-left-down col-1">
                <a href="https://www.youtube.com/@MOSTWANTEDRAP"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/youtube.png" height="30px" widtht="30px" alt=""></a>
            </div>

            <div class="col-4"></div>
        </div>
    </div>
    </div>
</footer>



</body>

</html> 