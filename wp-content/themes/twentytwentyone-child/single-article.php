<?php
get_header();
?>

<div class="article-contenu">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            $champs = get_fields();
            ?>
            <h1><?php the_title(); ?></h1>
            <?php if ($champs['article_image']) : ?>
                <img src="<?php echo $champs['article_image']['url']; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <p><strong>Catégorie :</strong> <?php echo $champs['article_categorie']; ?></p>
            <p><strong>Description :</strong> <?php echo $champs['article_description']; ?></p>
            <p><strong>Prix :</strong> <?php echo $champs['article_prix']; ?> $</p>
            <?php
        endwhile;
    endif;
    ?>
</div>

<?php
get_footer();
?>
