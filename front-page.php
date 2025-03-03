<?php get_header(); ?>
<section class="hero">
    <div class="hero__contenu global">
        <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
        <p class="hero__description"><?php bloginfo('description'); ?></p>
        <p class="hero__courriel"><a href="#">info@cmaisonneuve.qc.ca</a></p>
        <p class="hero__adresse">Lorem ipsum, dolor sit</p>
        <section class="hero__sociaux">
            <?php get_template_part("gabarits/icone-sociaux"); ?>
        </section>
    </div>
</section>
<section class="galerie">
    <div class="galerie__contenu global"></div>
</section>
<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('galerie')) {
                    the_content();
                } else { ?>
                    <?php get_template_part('gabarits/carte'); ?>
                <?php } ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>
</body>

</html>