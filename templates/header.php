<?php
use Roots\Sage\Nav;
use Roots\Sage\Nav\NavWalker;
$menu_name = 'primary_navigation';
?>
<header class="banner navbar navbar-fixed-top" role="banner" style="background-color:white;border-bottom:1px solid #eee">
    <?php if (is_admin_bar_showing()): ?>
        <?= '<div style="min-height: 28px;"></div>'; ?>
    <?php endif; ?>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" style="color:#f05f40">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-experiensa.png" alt="experiensa logo" class="ui small image" /></a>
        </div>

        <nav class="collapse navbar-collapse" role="navigation" style="text-transform:uppercase">
            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
            endif;
            ?>
        </nav>
    </div>
</header>
