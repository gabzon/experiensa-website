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

<section class="bg-primary landing" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Experiensa c'est quoi ?</h2>
                <hr class="light landing">
                <p class="text-faded">
                    Une solution web de publication et gestion de contenus pour les acteurs du tourisme: agences de voyages, bed & breakfast, offices de tourisme et hôtels leur permettant de grandir avec l'internet
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
                    <p class="text-muted">Publication du contenu<br> facile et agréable</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                    <h3>Efficacité</h3>
                    <p class="text-muted">Communication simplifiée. <br>Dites au revoir aux emails!</p>
                    <!-- <p class="text-muted">Mieux communiquer avec vos clients via des formulaires et des espaces de questions-reponses</p> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding landing" style="padding-bottom:0">
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
                                Publiez des offres de voyages attractives en toute simplicité <br>avec une librairie de modèles
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
                                Générez les demandes de devis<br> et créez les offres avec <br>des formulaires et des espaces questions-réponses
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
                                Gardez à jour automatiquement les données des agences clients, sous-traitantes et fournisseurs
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
                                Partenaires d'hébergement
                            </div>
                            <div class="project-name">
                                Gardez à jour automatiquement les données des partenaires d'hérbergement: hôtels et bed & breakfasts
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
                                Publication dans le reseau des partenaires
                            </div>
                            <div class="project-name">
                                Publiez vos offres sur les sites d'autres agences de voyage du monde entier, et facilitez la publication d'autres agences sur votre site
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio/gallery.png" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Galerie d'images
                            </div>
                            <div class="project-name">
                                Choisissez le style préféré de votre galerie d'images parmi de multiples options en toute simplicité
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<aside class="bg-dark" id="portfolio">
    <br>
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Qui sont nos clients ?</h2>
            <p>
                Experiensa est un produit de Sevinci SARL, développement des sites web et des systèmes de gestion des contenus principalement dans le secteur culturel : Une école de dance, un cinema d’auteur, une photographe, un collectif d’artistes, un bureau de design d’intérieur, entre autres.
            </p>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/dancefloor.png" class="img-responsive" alt="">
            </div>
            <div class="col-lg-3 col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/spoutnik.png" class="img-responsive" alt="">
            </div>
            <div class="col-lg-3 col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/mueller.png" class="img-responsive" alt="">
            </div>
            <div class="col-lg-3 col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clients/rosabrux.png" class="img-responsive" alt="">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <h2>Nos clients dans le tourisme</h2>
        <p>
            Les clients Experiensa sont les acteurs du tourisme tels que les agences de voyages, des Tour Opérateurs, les maisons d’hôtes, etc.
        </p>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/agencies/ts.png" class="img-responsive" alt="">
            </div>
            <div class="col-lg-3 col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/agencies/discovering.png" class="img-responsive" alt="">
            </div>
            <div class="col-lg-3 col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/agencies/fiestatravel.png" class="img-responsive" alt="">
            </div>
            <div class="col-lg-3 col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/agencies/aerovoyages.png" class="img-responsive" alt="">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="call-to-action">
            <h2>Free Download at Start Bootstrap!</h2>
            <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
        </div>
    </div>
</aside>

<section id="about" class="landing" style="padding-bottom: 0px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">A propos</h2>
                <hr class="primary landing">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 text-center">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-experiensa-big.png" alt="Experiensa logo" class="ui image big centered" />
                <!-- <h3>Pour quoi?</h3> -->
            </div>
            <div class="col-lg-9 col-md-9">
                <h3>Se réinventer à l’ère du digital</h3>
                <p class="text-muted">
                    L’équipe Experiensa se rencontre durant le MBA HES Genève en design et gestion des services en 2011, un programme qui a pour but l’innovation des services
                    Gabriel Zambrano informaticien et Marco Barber-Salvat commercial en nouvelles technologies. En 2012, l’entreprise Sevinci SARL est crée avec une double orientation: l’innovation et les nouvelles
                    technologies, en collaboration avec les experts:
                    Emmanuel Fragnières PhD professeur en gestion des services HES à Genève et à l’institut du tourisme du Valais et Magalie Dubosson PhD professeur à l’HEG Fribourg en Innovation et Entrepreneurship
                    <br><br>
                    Sevinci dévelope “the business tool kit” : une compilation en ligne d’outils permettant l’innovation et la creation de services, et réalise des séminaires auprès des étudiants
                    Depuis 2014 Sevinci travaille à l’analyse opérationnelle des acteurs du tourisme et au développement d’une solution web: Experiensa
                </p>
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <img src="http://static1.purepeople.com/articles/5/17/61/25/@/2142775-gian-marco-le-beau-bachelor-defile-en-637x0-3.jpg" alt="Experiensa logo" class="ui image big centered" />
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h3>Marco Barber Salvat</h3>
                        <span class="text-muted">Managing partner</span>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/gz.png" alt="gabriel zambrano" class="ui image big centered" />
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h3>Gabriel Zambrano</h3>
                        <span class="text-muted">CTO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
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
