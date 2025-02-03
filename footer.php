<footer>
    <div class="logo">
        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo _URLTHEME; ?>/assets/img/logo-jacomossi-branco.png" alt="Logo Jacomossi">
        </a>
    </div>
    <div class="center">
        <h3>Navegação</h3>
        <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
    </div>
    <div class="right">
        <ul class="socials">
            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>