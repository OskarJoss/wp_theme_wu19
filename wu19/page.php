<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <div class="row">

        <?php while (have_posts()) : the_post(); ?>

            <div class="col">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>

    </div>

<?php endif; ?>

<?php get_footer(); ?>