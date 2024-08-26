<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', get_post_format());
            endwhile;
        else :
            echo '<p>No posts found</p>';
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
