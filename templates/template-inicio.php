<?php

/**
 * Template Name: Início
 */

get_header();

//SOCIALS
$instagram = get_field('instagram');
$facebook = get_field('facebook');
$whatsapp = get_field('whatsapp');

// ACF HEADER
$title_header = get_field('title_header');
$subtitle_header = get_field('subtitle_header');
$link_header = get_field('link_header');

// ACF SESSION 1
$title_session_one = get_field('title_session_one');
$text_session_one = get_field('text_session_one');

// ACF SESSION 2
$title_session_two = get_field('title_session_two');
$subtitle_session_two = get_field('subtitle_session_two');
$itens_session_two = get_field('itens_session_two');

// ACF SESSION 3
$image_session_three = get_field('image_session_three');
$title_session_three = get_field('title_session_three');
$icon_session_three = get_field('icon_session_three');

// ACF SESSION 4
$itens_session_four = get_field('itens_session_four');

// ACF SESSION 5
$title_session_five = get_field('title_session_five');
$itens_session_five = get_field('itens_session_five');

// ACF SESSION 6
$title_session_six = get_field('title_session_six');
$itens_session_six = get_field('itens_session_six');
?>

<section class="section-one">
    <div class="slide-home" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/slide-01.png')">
        <div class="content">
            <div class="content-icons">
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
            <div class="content-text">
                <h1><?php echo $title_header; ?></h1>
                <p><?php echo $subtitle_header; ?></p>

                <a class="btn" href="<?php echo $link_header; ?>">Saiba mais <span class="line"></span></a>
            </div>
        </div>
    </div>
</section>

<section class="section-two">
    <div class="item-top">
        <h2><?php echo $title_session_one; ?> <span class="line"></span></h2>
        <p><?php echo $text_session_one; ?></p>
    </div>
</section>

<div class="section-three">
    <div class="item-top">
        <h2><?php echo $title_session_two; ?> <span class="line"></span></h2>
        <p><?php echo $subtitle_session_two; ?></p>
    </div>
    <div class="item-content">
        <?php

        foreach ($itens_session_two as $item) {

        ?>

            <a class="itens" href="<?php echo $item['link_itens_session_two']; ?>">
                <img src="<?php echo $item['icon_itens_session_two']; ?>" alt="">
                <h3><?php echo $item['title_itens_session_two']; ?></h3>
                <p>Clique e saiba mais</p>
            </a>

        <?php

        }

        ?>

    </div>
</div>

<div class="section-four">
    <div class="item-left">
        <img src="<?php echo get_field('image_session_three'); ?>" alt="">
    </div>
    <div class="item-right">
        <h2><?php echo get_field('title_session_three'); ?></h2>
        <div class="itens-line">
            <img src="<?php echo get_field('icon_session_three'); ?>" alt="">
            <span class="bar-orange"></span>
        </div>
    </div>
</div>

<section class="section-five">

    <?php

    foreach ($itens_session_four as $data) {

    ?>

        <div class="item-content">
            <div class="item-left">
                <h2><?php echo $data['title_itens_session_four']; ?> <span class="line"></span></h2>
                <h3><?php echo $data['subtitle_itens_session_four'] ?></h3>
                <a class="upload" href="">
                    <img src="<?php echo _URLTHEME; ?>/assets/img/icone-upload.png" alt="">
                    <p>Faça o upload <br> <span>Até 25MB</span></p>
                </a>
            </div>
            <div class="item-right">
                <img src="<?php echo $data['images_itens_session_four']; ?>" alt="">
            </div>
        </div>

    <?php

    }

    ?>


</section>

<div class="section-seven">
    <div class="our-clients">
        <h2><?php echo $title_session_five; ?> <span class="line"></span></h2>
        <ul class="sl-clients">

            <?php

            foreach ($itens_session_five as $res) {

            ?>

                <li><img src="<?php echo $res['image_itens_session_five']; ?>" alt="Logo Sotecnica"></li>

            <?php

            }

            ?>
        </ul>
    </div>

    <div class="services-provided">
        <h2><?php echo $title_session_six; ?> <span class="line"></span></h2>
        <ul class="sl-clients">

            <?php

            foreach ($itens_session_six as $slide_imgs) {

            ?>

                <li><img src="<?php echo $slide_imgs['image_itens_session_six'] ?>" alt="Logo Aiport LIS PT"></li>

            <?php

            }

            ?>


            <li><img src="<?php echo _URLTHEME; ?>/assets/img/logo-luca.png" alt="Logo Luca"></li>
            <li><img src="<?php echo _URLTHEME; ?>/assets/img/map.png" alt="Logo Map"></li>
            <li><img style="width: 60px;" src="<?php echo _URLTHEME; ?>/assets/img/logo-metropolitano-lisboa.png" alt="Logo Metropolitano Lisboa"></li>
            <li><img src="<?php echo _URLTHEME; ?>/assets/img/banco-de-portugal.png" alt="Logo Banco de Portugal"></li>
            <li><img src="<?php echo _URLTHEME; ?>/assets/img/normal.png" alt="Logo Normal"></li>
        </ul>
    </div>
</div>

<?php
get_footer();
?>