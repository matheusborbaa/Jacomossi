<?php 
//SOCIALS
$instagram = get_field('instagram');
$facebook = get_field('facebook');
$whatsapp = get_field('whatsapp');

?>

<footer>
    <div class="footer-itens">
        <div class="logo">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo _URLTHEME; ?>/assets/img/logo-jacomossi-branco.png" alt="Logo Jacomossi">
            </a>
        </div>
        <div class="center">
            <h3>Entre em contato:</h3>
            <p>Telefone comercial: 925035646 | 925035626</p>
            <a href="mailto:soaresjacomossi@gmail.com">E-mail comercial: soaresjacomossi@gmail.com</a>
        </div>
        <div class="right">
            <ul class="socials">
                <?php

                if (!empty($instagram)) {

                ?>

                    <li><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                <?php

                }

                if (!empty($facebook)) {

                ?>

                    <li><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                <?php

                }

                if (!empty($whatsapp)) {

                ?>

                    <li><a href="<?php echo $whatsapp; ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>

                <?php

                }

                ?>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright 2025 Al Right Reserved</p>
        <?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>