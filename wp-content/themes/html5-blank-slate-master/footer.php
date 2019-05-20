<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="site-footer" role="contentinfo">
    <footer class="site-footer" role="contentinfo">
        
        <div class="container">
  <div class="row">
    <div class="col-sm">
      <a href="#" class="logo"><img src="http://localhost/dashboard/codywoods/wp-content/uploads/2019/05/cw1.png" alt="CW Logo"></a>
    </div>
    <div class="col-sm">
      <h4>Site Map</h4>
            <hr>
    <nav class="nav-footer-wrap" role="navigation">
        <?php h5bs_footer_nav(); ?>
    </nav>
    </div>
    <div class="col-sm">
      <h4>Contact Us</h4>
            <hr>
            <p><i class="fas fa-mobile"></i><a href="tel:1-330-432-1635"> (330)432-1635</a></p>
            <p><i class="fas fa-envelope"></i><a href="mailto:Cody@cgw2422.com?Subject=Hello%20again" target="_top"> Cody@cgw2422.com</a></p>
    </div>
    <div class="col-sm">
      <h4>Social Media</h4>
            <hr>
            <div class="social-icons">
            <a href="#"><p><i class="fab fa-facebook-square"></i></p></a>
            <a href="#"><p><i class="fab fa-twitter-square"></i></p></a>
            <a href="#"><p><i class="fab fa-linkedin"></i></p></a>
            </div>
    </div>
  </div>
</div>
    <?php get_template_part( 'parts/icons', 'social' ); ?>

    <p class="copyright">&copy; <?php echo date( 'Y' ); ?> <?php echo get_bloginfo( 'name' ); ?></p>
</footer>

<?php wp_footer(); ?>

<?php
// don't track admins or editors and google analytics option is filled in
if ( ! current_user_can( 'edit_pages' ) && get_option( 'client_google_analytics' ) ) :
    $analytics_id = get_option( 'client_google_analytics' ); ?>

    <!-- Google Universal Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', '<?php echo $analytics_id; ?>', 'auto');ga('send', 'pageview');
    </script>
<?php endif; ?>

</body>
</html>
