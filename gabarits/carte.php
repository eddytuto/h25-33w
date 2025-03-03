<?php

/**
 * Template Name: carte
 */
?>
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