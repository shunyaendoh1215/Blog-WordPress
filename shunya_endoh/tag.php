<?php
    /*
    Template Name: Archives
    */
    ?>

   <!--? sidebar -->
    <?php get_sidebar(); ?>

    <!--? header -->
    <?php get_header(); ?>

    <!--? main -->


    <div class="articles-container">
      <div class="articles">

    <?php if(have_posts()): while(have_posts()):the_post(); ?>

        <li class="article-item">
          <a href="<?php the_permalink(); ?>" class="article-item-container">
            <?php the_post_thumbnail('thumbside'); ?>
            <h5><?php the_time('Y.m.d'); ?></h5>
            <h4><?php the_title(); ?></h4>
            <div class="article-tag">
              <h4><?php $tags = get_the_tags(); if ($tags) { foreach($tags as $tag) { echo $tag->name; }} ?></h4>
            </div>
          </a>
        </li>

        <?php endwhile; endif; ?>

      </div>
    </div>

    <div class="paging-links">
    <?php
    if (function_exists('responsive_pagination')) {
      responsive_pagination($additional_loop->max_num_pages);
    }
    ?>
    </div>

    <?php get_footer(); ?>