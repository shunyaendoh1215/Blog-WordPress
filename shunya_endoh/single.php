    <!--? sidebar -->
    <?php get_sidebar(); ?>

    <!--? header -->
    <?php get_header(); ?>



  <!--? sidebar-left-default -->
  <aside class="left-side-menu-container-default">

      <section class="left-menu-header-default">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h3>"<?php $tags = get_the_tags(); if ($tags) { foreach($tags as $tag) { echo $tag->name; }} ?>"の関連記事</h3>
        <?php endwhile; endif; ?>
      </section>


      <?php
      $get_posts_parm = "'numberposts=4&tag=" . $tags[0]->term_id . "'";
      $args = array(
        'numberposts' => 4,
        'exclude' => get_the_ID(),
        'tax_query' => array(
            array(
                'taxonomy' => 'post_tag',
                'field' => 'slug',
                'terms' => "'".$tags[0]->name."'"
            )
        )
      );
      ?>

      <div class="left-side-menu-articles-default">
        <ul class="left-side-menu-article-items-default">
        <?php
        $related_posts = get_posts($args);
        ?>
        <?php foreach($related_posts as $post): ?>
          <li class="article-item-default">
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbside'); ?>
              <p class ="title-in-left-bar-default"><?php the_title(); ?></p>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
  </aside>

      <!--? main -->

    <div class="blog-container">
      <div class="blog-page-container">
        <?php
        if(have_posts()):
        while(have_posts()):
        the_post();
        ?>
        <h3><?php the_title(); ?> (<?php the_time('Y.m.d'); ?>)</h3>
        <h5 class="author-container">Author: <?php the_author_link(); ?></h5>
        <div class="content-container">
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>