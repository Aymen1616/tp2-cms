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


<div class="homepage-introduction">
    <p><?php echo get_field('accueil_introduction'); ?></p>
</div>

<div class="homepage-articles">
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
        'posts_per_page' => 8,
    );
    
    
    //querry
    $the_query = new WP_Query($args);
    
        if( $the_query->have_posts() ): ?>
        
            <section class = "infos">
            <div class="grille grille--3">
            <?php while( $the_query->have_posts() ) : $the_query->the_post(); 
            $champs = get_fields();
    
            // $chaise_titre= $champs['chaise_titre'];
            // $chaise_designer=$champs['chaise_designer'];
            // $chaise_annee=$champs['chaise_annee'];
             $article_categorie = $champs['article_categorie'];
            $article_image = $champs['article_image']['url'];
            ?>
                 
            
                <a href="<?php the_permalink(); ?>"> 
                <?php if ($article_image):?>  
                <div class="grille__item">
                <h3><?php the_title(); ?></h3>
                <h2><?php echo $article_categorie; ?></h2>
                    <img src="<?php echo $article_image; ?>" />
                <?php endif;?>
                
                    <!-- <h3 class = 'description'><?php echo $chaise_titre; ?></h3>
                    <h3 class = 'designer'><?php echo $chaise_designer; ?></h3> -->
                </div> 
                </a>
                   
       
            <?php endwhile; ?>
            </section>
            </div>
        <?php endif; ?>
    
    <?php wp_reset_query();


get_footer();
?>
