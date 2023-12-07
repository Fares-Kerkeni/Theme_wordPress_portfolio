<?php get_header(); ?>
<?php if(have_posts()): ?>
<div class="all_posts">
    <?php while(have_posts()): the_post(); ?>

    <div class="post">
        <!-- // Pour afficher le titre et le contenu de chaque article, il faut ajouter
        les fonctions the_title() et the_content() dans le fichier index.php -->
        <!-- // the permission cree un lien pour chaque article -->
    
        
            <?php the_post_thumbnail(); ?>
            <?php the_title(); ?>
            <?php the_content(); ?>

       

        <!-- <a href="<?php the_permalink()?>"> suite </a> -->
    </div>

    <?php endwhile; ?>
</div>
<?php endif; ?>

<?php get_footer(); ?>