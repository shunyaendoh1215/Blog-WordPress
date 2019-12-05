<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrapper">

    <!--? sidebar (default: hidden) -->
    <aside class="side-menu-container-hidden">
        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/icon.jpg" alt="my_pic">
        <div class="upper-text">
          <p class="name-text">Shunya_Endoh</p>
          <div class="details-text-container">
            <p>1997年12月15日生まれ。 <br>セブ島にて６ヶ月間のエンジニア留学を経てエンジニアとして活動中。</p>
            <p>学習で躓いた箇所や日記をだらだらと綴っています。</p>
          </div>
        </div>

        <section class="menu-lower-hidden">
          <div class="link-container">
            <div class="svg-container">
              <a href="https://twitter.com/shunya39836817/" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
              </a>
            </div>
            <div class="link-text-container">
              <p class="link-text">Twitter: <a href="https://twitter.com/shunya39836817/" target="_blank">@shunya39836817</a></p>
            </div>
          </div>
          <div class="link-container">
            <div class="svg-container">
              <a href="https://github.com/shunyaendoh1215" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github-alt" class="svg-inline--fa fa-github-alt fa-w-15" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512"><path fill="currentColor" d="M186.1 328.7c0 20.9-10.9 55.1-36.7 55.1s-36.7-34.2-36.7-55.1 10.9-55.1 36.7-55.1 36.7 34.2 36.7 55.1zM480 278.2c0 31.9-3.2 65.7-17.5 95-37.9 76.6-142.1 74.8-216.7 74.8-75.8 0-186.2 2.7-225.6-74.8-14.6-29-20.2-63.1-20.2-95 0-41.9 13.9-81.5 41.5-113.6-5.2-15.8-7.7-32.4-7.7-48.8 0-21.5 4.9-32.3 14.6-51.8 45.3 0 74.3 9 108.8 36 29-6.9 58.8-10 88.7-10 27 0 54.2 2.9 80.4 9.2 34-26.7 63-35.2 107.8-35.2 9.8 19.5 14.6 30.3 14.6 51.8 0 16.4-2.6 32.7-7.7 48.2 27.5 32.4 39 72.3 39 114.2zm-64.3 50.5c0-43.9-26.7-82.6-73.5-82.6-18.9 0-37 3.4-56 6-14.9 2.3-29.8 3.2-45.1 3.2-15.2 0-30.1-.9-45.1-3.2-18.7-2.6-37-6-56-6-46.8 0-73.5 38.7-73.5 82.6 0 87.8 80.4 101.3 150.4 101.3h48.2c70.3 0 150.6-13.4 150.6-101.3zm-82.6-55.1c-25.8 0-36.7 34.2-36.7 55.1s10.9 55.1 36.7 55.1 36.7-34.2 36.7-55.1-10.9-55.1-36.7-55.1z"></path></svg>
              </a>
            </div>
            <div class="link-text-container">
              <p class="link-text">Github: <a href="https://github.com/shunyaendoh1215" target="_blank">shunyaendoh1215</a></p>
            </div>
          </div>
          <div class="link-container">
            <div class="svg-container">
              <a href="https://qiita.com/shunyaendoh" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
              </a>
            </div>
            <div class="link-text-container">
              <p class="link-text">Qiita: <a href="https://qiita.com/shunyaendoh" target="_blank">shunyaendoh</a></p>
            </div>
          </div>
          <div class="link-container">
            <div class="svg-container">
              <a href="mailto:shunya.endoh@gmail.com" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
              </a>
            </div>
            <div class="link-text-container">
              <p class="link-text">Email: <a href="mailto:shunya.endoh@gmail.com" target="_blank">shunya.endoh@gmail.com</a></p>
            </div>
          </div>
        </section>
    </aside>

    <!--? sidebar (default: active) -->
    <aside class="side-menu-container">

        <section class="menu-header">
          <h3>Tag List</h3>
        </section>

        <div class="tag-upper-container">
          <ul class="tags-upper">
            <?php
              $posttags = get_tags();
              if ($posttags) {
                foreach($posttags as $tag) {
                  echo '<li class="tag-item"><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></li>';
                }
              }
            ?>
          </ul>
        </div>

        <div class="tag-lower-container">
          <ul>
            <li class="tag-item-lower"><a href="<?php bloginfo('url'); ?>/cat/blog">ブログ</a></li>
            <li class="tag-item-lower"><a href="<?php bloginfo('url'); ?>/cat/tech">技術系</a></li>
          </ul>
        </div>
        <section class="menu-footer">
          <div class="link-container">
            <div class="svg-container">
              <a href="https://www.ideathon.site/" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lightbulb" class="svg-inline--fa fa-lightbulb fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M96.06 454.35c.01 6.29 1.87 12.45 5.36 17.69l17.09 25.69a31.99 31.99 0 0 0 26.64 14.28h61.71a31.99 31.99 0 0 0 26.64-14.28l17.09-25.69a31.989 31.989 0 0 0 5.36-17.69l.04-38.35H96.01l.05 38.35zM0 176c0 44.37 16.45 84.85 43.56 115.78 16.52 18.85 42.36 58.23 52.21 91.45.04.26.07.52.11.78h160.24c.04-.26.07-.51.11-.78 9.85-33.22 35.69-72.6 52.21-91.45C335.55 260.85 352 220.37 352 176 352 78.61 272.91-.3 175.45 0 73.44.31 0 82.97 0 176zm176-80c-44.11 0-80 35.89-80 80 0 8.84-7.16 16-16 16s-16-7.16-16-16c0-61.76 50.24-112 112-112 8.84 0 16 7.16 16 16s-7.16 16-16 16z"></path></svg>
              </a>
            </div>
            <div class="link-text-container">
              <p class="link-text">Ideathon: <a href="https://www.ideathon.site/" target="_blank">www.ideathon.site</a></p>
            </div>
          </div>
          <div class="link-container">
            <div class="svg-container">
              <a href="https://www.shunyaendoh.work/" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
              </a>
            </div>
            <div class="link-text-container">
              <p class="link-text">Portfolio: <a href="https://www.shunyaendoh.work/" target="_blank">shunyaendoh.work</a></p>
            </div>
          </div>
        </section>

    </aside>

    <!--? button for left bar -->

    <div class="arrow-icon">
      <?xml version="1.0" encoding="iso-8859-1"?>
      <!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
      <path style="fill:#333;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
        C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
        c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
      </svg>
    </div>

    <!--? sidebar-left -->
    <aside class="left-side-menu-container">

      <section class="left-menu-header">
        <h3>最新記事</h3>
      </section>

      <div class="left-side-menu-articles">
        <ul class="left-side-menu-article-items">

        <?php
        $infoPosts = get_posts('numberposts=4');
        foreach($infoPosts as $post):
        ?>

          <li class="article-item">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('thumbside'); ?>
              <p class="tag-name-in-left-bar-hidden">
                <?php $tags = get_the_tags(); if ($tags) { foreach($tags as $tag) { echo $tag->name; }} ?>
              </p>
              <p class ="title-in-left-bar-hidden"><?php the_title(); ?></p>
            </a>
          </li>

          <?php endforeach; ?>

        </ul>
      </div>
    </aside>