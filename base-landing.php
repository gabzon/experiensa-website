<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body id="page-top" <?php body_class(); ?> style="padding-top:-40px">
    <!--[if IE]>
    <div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php
do_action('get_header');
get_template_part('templates/header','front-page');
?>
<header id="landing">
    <div style="width: 100%; height: 700px;"
    data-vide-bg="mp4: <?php echo get_stylesheet_directory_uri() ?>/assets/videos/experiensa-landing.mp4a, webm: <?php echo get_stylesheet_directory_uri() ?>/assets/videos/experiensa-landing.webma, ogv: <?php echo get_stylesheet_directory_uri() ?>/assets/videos/experiensa-landing.ogv, poster: <?php echo get_stylesheet_directory_uri() ?>/assets/images/landing-image-experiensa.jpg"
    data-vide-options="posterType: jpg, loop: true, muted: false, position: 0% 0%">
    <div class="header-content">
        <div class="header-content-inner">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-experiensa-big.png" alt="Experiensa logo" class="ui image big centered" />
            <p style="margin-left:130px">Publication et gestion de contenus pour le tourisme</p>
            <!-- <a href="#about" class="btn btn-primary btn-xl page-scroll"><?php _e('C\'est quoi ?','sage'); ?></a> -->
        </div>
    </div>
</div>
</header>

<section class="bg-primary landing" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Experiensa c'est quoi ?</h2>
                <hr class="light landing">
                <p class="text-faded">
                    Une solution web pour les acteurs du tourisme: agences de voyages, bed & breakfast, offices de tourisme et hôtels leur permettant de grandir avec le web
                </p>

                <!-- <a href="#" class="btn btn-default btn-xl">Get Started!</a> -->
            </div>
        </div>
    </div>
</section>

<section id="services" class="landing" style="padding-bottom: 0px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Livré clé en main</h2>
                <hr class="primary landing">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                    <h3>Site Internet</h3>
                    <p class="text-muted">Un site internet attractif pour les acteurs du tourisme</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                    <h3>Catalogue</h3>
                    <p class="text-muted">Une publication automatique sur les sites des partenaires</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                    <h3>Ergonomie</h3>
                    <p class="text-muted">Publication du contenu de façon facile et agréable</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                    <h3>Efficacité</h3>
                    <p class="text-muted">Formulaire intelligents pour générer les devis/offres et des espaces centralisés de questions-reponses</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding landing" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/1.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Voyages
                            </div>
                            <div class="project-name">
                                Gérer et publier le catalogue de voyages
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Devis
                            </div>
                            <div class="project-name">
                                Création d'offres et devis
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Agences de voyage partenaires
                            </div>
                            <div class="project-name">
                                Création d'offres et devis
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Partenaire d'hébergement
                            </div>
                            <div class="project-name">
                                Gérer et publie
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/5.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Intégration entre sites web partenaires
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/6.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Galerie d'images
                            </div>
                            <div class="project-name">
                                Afficher les images de vos offres de façon
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Free Download at Start Bootstrap!</h2>
            <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
        </div>
    </div>
</aside>

<section id="contact" class="landing">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x wow bounceIn"></i>
                <p>+41 78 323 23 23</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                <p><a href="mailto:your-email@your-domain.com">info@experiensa.com</a></p>
            </div>
        </div>
    </div>
</section>
<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>

<!-- Plugin JavaScript -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/jquery.easing.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/jquery.fittext.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/scripts/creative.js"></script>

</body>
</html>
