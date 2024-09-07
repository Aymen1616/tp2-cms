<?php
get_header();
?>

<div class="article-contenu-wrapper">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            $champs = get_fields();
            ?>
            <h3><?php the_title(); ?></h3>
            <div class="article-contenu">
                <?php if ($champs['article_image']) : ?>
                    <img src="<?php echo $champs['article_image']['url']; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="article-details">
                    <p><strong>Catégorie :</strong> <?php echo $champs['article_categorie']; ?></p>
                    <p><strong>Description :</strong> <?php echo $champs['article_description']; ?></p>
                    <p><strong>Prix :</strong> <?php echo $champs['article_prix']; ?> $</p>
                </div>
            </div>
            <?php
        endwhile;
    endif;
    ?>
</div>

<?php
get_footer();
?>