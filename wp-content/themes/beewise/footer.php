<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beewise
 */

?>
<footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'beewise' ) ); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf( esc_html__( 'Proudly powered by %s', 'beewise' ), 'WordPress' );
            ?>
        </a>
        <span class="sep"> | </span>
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf( esc_html__( 'Theme: %1$s by %2$s.', 'beewise' ), 'beewise', '<a href="vk.com/asma_hatoka">A.Hatoka</a>' );
            ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
<div class="bg_wrapper" id="bg_wrapper"></div>
<?php wp_footer(); ?>
</body>
</html>
