<?php

/**
 * Template Name: Início
 */

get_header();
?>

<section class="section-one">
    <div class="slide-home" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/slide-01.png')">
        <div class="content">
            <div class="content-icons">
                <ul class="socials">
                    <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="content-text">
                <h1>Experiência e Dedicação</h1>
                <p>Maecenas faucibus mollis interdum. Maecenas sed diam eget risus
                    varius blandit sit amet non magna.</p>

                <a class="btn" href="">Saiba mais <span class="line"></span></a>
            </div>
        </div>
    </div>
</section>

<section class="section-two">
    <div class="item-top">
        <h2>Sobre Nos <span class="line"></span></h2>
        <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
</section>

<div class="section-four">
    <div class="our-clients">
        <h2>Nossos Clientes <span class="line"></span></h2>
        <ul>
            <li><img src="<?php echo _URLTHEME; ?>/assets/img/logo-airport-lis-pt.png" alt="Logo Aiport LIS PT"></li>
            <li><img style="width: 60px;" src="<?php echo _URLTHEME; ?>/assets/img/logo-metropolitano-lisboa.png" alt="Logo Metropolitano Lisboa"></li>
            <li><img src="<?php echo _URLTHEME; ?>/assets/img/logo-luca.png" alt="Logo Luca"></li>
            <li><img src="<?php echo _URLTHEME; ?>/assets/img/logo-motaengil.png" alt="Logo Motaengil"></li>
            <li><img src="<?php echo _URLTHEME; ?>/assets/img/logo-cari.png" alt="Logo Cari"></li>
        </ul>
    </div>
</div>

<?php
get_footer();
?>