<?php
get_header();
?>

<?php 
$bg_image = get_field('accueil_image_bg');
if ($bg_image && !empty($bg_image['url'])) {
    $bg_image = $bg_image['url'];
} else {
    $bg_image = wp_get_attachment_url( 88 );
}
?>

<div class="homepage-banner" style="background-image: url(<?php echo $bg_image; ?>)">
<h1><?php echo get_field('accueil_slogan'); ?></h1>
</div>

<div class="accueil-introduction">
    <p><?php echo get_field('accueil_introduction'); ?></p>
</div>

<div class="acceuil-article">
    <?php
    // Query for Vaiselle articles
    $args_vaiselle = array(
        'post_type' => 'article',
        'meta_query' => array(
            array(
                'key' => 'article_actif',
                'value' => '1',
                'compare' => '=='
            ),
            array(
                'key' => 'article_categorie',
                'value' => 'Vaisselle',
                'compare' => '=='
            )
        ),
        'posts_per_page' => 4,
    );   
    $vaiselle_query = new WP_Query($args_vaiselle);   
    if( $vaiselle_query->have_posts() ): ?>       
        <section class="infos">
        <h3><?php echo "Vaiselle"; ?></h3>
        <div class="grille grille--4">
        <?php while( $vaiselle_query->have_posts() ) : $vaiselle_query->the_post(); 
        $champs = get_fields();
        $article_image = $champs['article_image']['url'];           
        ?>
        
            <a href="<?php the_permalink(); ?>"> 
            <?php if ($article_image):?>  
            <div class="grille__item">           
            <img src="<?php echo $article_image; ?>" />
            <p><?php the_title(); ?></p>
            </div> 
            <?php endif;?>
            </a>
        <?php endwhile; ?>
        </div>
        </section>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

    <?php
    // Query for Service articles
    $args_service = array(
        'post_type' => 'article',
        'meta_query' => array(
            array(
                'key' => 'article_actif',
                'value' => '1',
                'compare' => '=='
            ),
            array(
                'key' => 'article_categorie',
                'value' => 'Service',
                'compare' => '=='
            )
        ),
        'posts_per_page' => 4,
    );   
    $service_query = new WP_Query($args_service);   
    if( $service_query->have_posts() ): ?>       
        <section class="infos">
        <h3><?php echo "Service"; ?></h3>
        <div class="grille grille--4">
        <?php while( $service_query->have_posts() ) : $service_query->the_post(); 
        $champs = get_fields();
        $article_image = $champs['article_image']['url'];           
        ?>
            <a href="<?php the_permalink(); ?>"> 
            <?php if ($article_image):?>  
            <div class="grille__item">
            <img src="<?php echo $article_image; ?>" />
            <p><?php the_title(); ?></p>
            </div> 
            <?php endif;?>
            </a>
        <?php endwhile; ?>
        </div>
        </section>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>


<?php
get_footer();
?>
