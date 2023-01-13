
<footer class="footer-bs">
        <div class="row footer-menu">
            <div class="col-md-3 footer-support">
                <?php dynamic_sidebar( 'footer-contact' ); ?>
            </div>
            <div class="col-md-3 footer-brand">
                <?php the_custom_logo(); ?>
            </div>
        	<div class="col-md-3 footer-nav">
                <?php dynamic_sidebar( 'footer-service' ); ?>
            </div>
        	<div class="col-md-3 footer-social">
                <?php dynamic_sidebar( 'footer-social-icons' ); ?>
            </div>
        </div>

        <div class="footer-content-bottom text-center">
            <p>The copyright symbol: &copy;</p>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>