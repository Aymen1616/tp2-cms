<?php
get_header();
global $post;
$page_title = $post->post_title;

if ($page_title == 'Vaisselle' || $page_title == 'Service') {
    $bg_image = get_field('image_bg');
    if ($bg_image && !empty($bg_image['url'])) {
        $bg_image = $bg_image['url'];
    } else {
        $bg_image = wp_get_attachment_url( 97 );
    }
    ?>
    <div class="page-baniere" style="background-image: url('<?php echo $bg_image; ?>');">
        <p><?php echo get_field('introduction'); ?></p>
    </div>

    <div class="page-introduction">
        <h3><?php the_title(); ?></h3>
    </div>

    <div class="page-articles">
        <?php
        $args = array(
            'post_type' => 'article',
            'meta_query' => array(
                array(
                    'key' => 'article_actif',
                    'value' => '1',
                    'compare' => '=='
                )
            ),
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            echo '<div class="articles-grid">';
            while ($query->have_posts()) : $query->the_post();
                $champs = get_fields();
                if (($page_title == 'Vaisselle' && $champs['article_categorie'] == 'Vaisselle') || ($page_title == 'Service' && $champs['article_categorie'] == 'Service')) {
                    ?>
                    <div class="article-tile">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (!empty($champs['article_image'])) : ?>
                                <img src="<?php echo esc_url($champs['article_image']['url']); ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default-thumbnail.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </div>
                    <?php
                }
            endwhile;
            echo '</div>';
        else :
            echo '<p>Aucun article trouvé.</p>';
        endif;
        wp_reset_postdata();
        ?>
    </div>
    <?php
}?>
  
<?php
get_footer();
?>
