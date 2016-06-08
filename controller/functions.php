<?php

function do_query($title){
    // WP_Query arguments
    $args = [
        'category_name'     => $title,
        'posts_per_page'    =>  -1
    ];
    // The Query
    $query = new WP_Query( $args );
    return $query;
}

function display_results($query, $title, $color){ ?>
    <div class="ui segment">
        <h3 class="ui header center aligned uppercase"><?= $title; ?></h3>
        <br>
        <?php if ( $query->have_posts() ): ?>
            <div class="ui five column stackable grid center aligned">
                <?php while (  $query->have_posts() ) :?>
                    <div class="column">
                        <?php $query->the_post(); ?>
                        <a href="<?= get_permalink() ?>" class="ui button big basic fluid <?= $color; ?>">
                            <?= the_title(); ?>
                        </a>
                    </div>
                <?php endwhile ?>
            </div>
        <?php endif; ?>
        <br>
    </div>
    <!-- Restore original Post Data -->
    <?php wp_reset_postdata(); ?>
<?php } ?>
