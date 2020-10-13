<?php
/**
 * The header of all pages.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2019
 * @link       http://averta.net
 */
global $post;
do_action( "auxin_before_head_open", $post );
?>
<!DOCTYPE html>
<!--[if IE 9 ]>   <html class="no-js oldie ie9 ie" <?php language_attributes(); ?> > <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
        <meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- devices setting -->
        <meta name="viewport"   content="initial-scale=1<?php echo auxin_get_option( 'enable_site_reponsiveness', 1 ) ? ',user-scalable=no,width=device-width' : ''; ?>">

<!-- outputs by wp_head -->
<?php wp_head(); ?>
<!-- end wp_head -->
</head>


<body <?php body_class(); auxin_dom_attributes( 'body' );?>>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="366804400156117"
  logged_in_greeting="¡Hola! ¿En qué puedo ayudarte?"
  logged_out_greeting="¡Hola! ¿En qué puedo ayudarte?">
      </div>


<?php do_action( "auxin_after_body_open", $post ); ?>

<div id="inner-body">

<?php do_action( "auxin_after_inner_body_open", $post );
