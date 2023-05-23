<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

// END ENQUEUE PARENT ACTION

function load_resources()
{
    wp_enqueue_style("bootstrap", "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");
    wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");

    wp_register_script('Bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('Bootstrap4');
    wp_script_add_data('Bootstrap4', array('integrity', 'crossorigin'), array('sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6', 'anonymous'));
}
add_action("wp_enqueue_scripts", "load_resources");



/**
 *removes the storefront sidebar
 */
function tk_remove_storefront_sidebar()
{
    remove_action('storefront_sidebar', 'storefront_get_sidebar', 10);
}
add_action('get_header', 'tk_remove_storefront_sidebar');

/**
 * Disable the Search Box in the Storefront Theme
 */
add_action('init', 'jk_remove_storefront_header_search');
function jk_remove_storefront_header_search()
{
    remove_action('storefront_header', 'storefront_product_search',             40);
}
/**
 * Disable the Cart in the Storefront Theme
 */
add_action('init', 'jk_remove_storefront_header_cart');
function jk_remove_storefront_header_cart()
{
    remove_action('storefront_header', 'storefront_header_cart',             60);
}

/**
 * disable the storefront header
 */
add_action('init', 'jk_remove_storefront_header');
function jk_remove_storefront_header()
{
    remove_action('storefront_header', 'storefront_header_container',             0);
}


/**
 * disable the storefront header
 */
add_action('init', 'jk_remove_storefront_before_header');
function jk_remove_storefront_before_header()
{
    remove_action('storefront_before_header', 'storefront_before_header_container',             0);
}


/**
 * disable the storefront footer
 */
add_action('init', 'jk_remove_storefront_footer');
function jk_remove_storefront_footer()
{
    remove_action('storefront_footer', 'storefront_footer_widgets',             10);
    remove_action('storefront_footer', 'storefront_credit',             20);
}

/**
 * disable the storefront primary navigation
 */
add_action('init', 'jk_remove_storefront_primary_navigation');
function jk_remove_storefront_primary_navigation()
{
    remove_action('storefront_header', 'storefront_primary_navigation',             50);
}

/**
 * disable the storefront footer cart
 */
add_action('init', 'jk_remove_storefront_footer_cart');
function jk_remove_storefront_footer_cart()
{
    remove_action('storefront_footer', 'storefront_handheld_footer_bar',             999);
}

/**
 * Remove breadcrumbs for Storefront theme
 */
add_action('init', 'wc_remove_storefront_breadcrumbs');

function wc_remove_storefront_breadcrumbs()
{
    remove_action('storefront_before_content', 'woocommerce_breadcrumb', 10);
}


function sliders()
{
?>
    <script type="text/javascript">
        window.onload = function() {
            var tabs = document.getElementsByClassName("tabs");
            for (ti = 0; ti < tabs.length; ti++) {
                var t = tabs[ti];

                var buttons = t.getElementsByTagName("button");
                var slides = t.getElementsByClassName("slider");

                for (var bi = 0; bi < buttons.length; bi++) {
                    var b = buttons[bi];
                    var s = slides[bi];

                    b.dataset.index = bi;
                    s.dataset.index = bi;

                    b.onclick = function() {
                        var index = this.dataset.index;

                        for (var si = 0; si < slides.length; si++) {
                            slides[si].style.display = "none";
                        }
                        var slide = document.querySelector(".slider[data-index='" + index + "']");
                        console.log(slide);
                        slide.style.display = "block";
                    }

                }
            }
        };
    </script>
<?php
}

function sliders_two()
{
?>
    <script type="text/javascript">
        window.onload = function() {
            var tabs = document.getElementsByClassName("tabs_two");
            for (ti = 0; ti < tabs.length; ti++) {
                var t = tabs[ti];

                var buttons = t.getElementsByTagName("button");
                var slides = t.getElementsByClassName("slider_two");

                for (var bi = 0; bi < buttons.length; bi++) {
                    var b = buttons[bi];
                    var s = slides[bi];

                    b.dataset.index = bi;
                    s.dataset.index = bi;

                    b.onclick = function() {
                        var index = this.dataset.index;

                        for (var si = 0; si < slides.length; si++) {
                            slides[si].style.display = "none";
                        }
                        var slide = document.querySelector(".slider_two[data-index='" + index + "']");
                        console.log(slide);
                        slide.style.display = "block";
                    }

                }
            }
        };
    </script>
<?php
}

