<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> style="padding-top:70px">
    <!--[if IE]>
    <div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php
do_action('get_header');
get_template_part('templates/header');
?>
<div class="wrap container" role="document">
    <div class="content row">
        <?php if (Setup\display_sidebar()) : ?>
            <div class="ui grid stackable">
                <main class="main twelve wide column">
                    <?php include Wrapper\template_path(); ?>
                </main><!-- /.main -->
                <aside class="sidebar four wide column">
                    <?php include Wrapper\sidebar_path(); ?>
                </aside><!-- /.sidebar -->
            </div>
        <?php else: ?>
            <main class="main">
                <?php include Wrapper\template_path(); ?>
            </main><!-- /.main -->
        <?php endif; ?>
    </div><!-- /.content -->
</div><!-- /.wrap -->
<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>
</body>
</html>
