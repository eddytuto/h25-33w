<?php get_header(); ?>

<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('galerie')) {
                    the_content();
                } else { ?>
                    <article>
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail');
                        }
                        ?>
                        <h2><?php the_title(); ?></h2>
                        <div><?php echo wp_trim_words(get_the_excerpt(), 25, " ... "); ?></div>
                        <a href="<?php the_permalink(); ?>">Lire la suite</a>
                    </article>
                <?php } ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>
</body>

</html>