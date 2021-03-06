<?php get_header(); ?>

<!-- content -->
<div id="content">
  <div class="inner">

    <!-- primary -->
    <main id="primary">

      <?php if (function_exists('bcn_display')) : ?>

      <!-- breadcrumb -->
      <div class="breadcrumb">
        <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" href="/" class="home"><span property="name">ホーム</span></a>
          <meta property="position" content="1">
        </span>
        <i class="fas fa-angle-right"></i>
        <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" href="#" class="taxonomy category"><span property="name">カテゴリ名</span></a>
          <meta property="position" content="2">
        </span>
        <i class="fas fa-angle-right"></i>
        <span class="post post-post current-item">記事のタイトルが入ります</span>
      </div><!-- /breadcrumb -->
      <?php endif; ?>

      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>

      <!-- entry -->
      <!-- entry -->
      <article <?php post_class(array('entry')); ?>>

        <!-- entry-header -->
        <div class="entry-header">
          <?php
              // カテゴリー１つ目の名前を表示
              $category = get_the_category();
              if ($category[0]) : ?>
          <div class="entry-label"><a
              href="<?php echo esc_url(get_category_link($category[0]->term_id)); ?>"><?php echo $category[0]->cat_name; ?></a>
          </div><!-- /entry-item-tag -->
          <?php endif; ?>
          <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

          <!-- entry-meta -->
          <div class="entry-meta">
            <time class="entry-published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
            <?php if (get_the_modified_time('Y-m-d') !== get_the_time('Y-m-d')) : ?>
            <time class="entry-updated" datetime="<?php the_modified_time( 'c' ); ?>">最終更新日
              <?php the_modified_time('Y/n/j'); ?></time>
            <?php endif; ?>
          </div><!-- /entry-meta -->

          <!-- entry-img -->
          <div class="entry-img">
            <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                }
                ?>
          </div><!-- /entry-img -->
        </div><!-- /entry-header -->

        <!-- entry-body -->
        <div class="entry-body">
          <?php
              //本文の表示
              the_content(); ?>
          <?php
              //改ページを有効にするための記述
              wp_link_pages(
                array(
                  'before' => '<nav class="entry-links">',
                  'after' => '</nav>',
                  'link_before' => '',
                  'link_after' => '',
                  'next_or_number' => 'number',
                  'separator' => '',
                )
              );
              ?>
        </div><!-- /entry-body -->


        <!-- entry-tag-items -->
        <?php $post_tags = get_the_tags(); ?>
        <div class="entry-tag-items">
          <div class="entry-tag-head">タグ</div><!-- /entry-tag-head -->
          <?php if ($post_tags) : ?>
          <?php foreach ($post_tags as $tag) : ?>
          <div class="entry-tag-item"><a
              href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a>
          </div><!-- /entry-tag-item -->
          <?php endforeach; ?>
          <?php endif; ?>
        </div><!-- /entry-tag-items -->


        <div class="entry-related">
          <div class="related-title">関連記事</div>

          <div class="related-items">

            <a class="related-item" href="">
              <div class="related-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt="">
              </div><!-- /related-item-img -->
              <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
            </a><!-- /related-item -->

            <a class="related-item" href="">
              <div class="related-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt="">
              </div><!-- /related-item-img -->
              <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
            </a><!-- /related-item -->

            <a class="related-item" href="">
              <div class="related-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt="">
              </div><!-- /related-item-img -->
              <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
            </a><!-- /related-item -->

            <a class="related-item" href="">
              <div class="related-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt="">
              </div><!-- /related-item-img -->
              <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
            </a><!-- /related-item -->

            <a class="related-item" href="">
              <div class="related-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt="">
              </div><!-- /related-item-img -->
              <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
            </a><!-- /related-item -->

            <a class="related-item" href="">
              <div class="related-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt="">
              </div><!-- /related-item-img -->
              <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
            </a><!-- /related-item -->

            <a class="related-item" href="">
              <div class="related-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt="">
              </div><!-- /related-item-img -->
              <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
            </a><!-- /related-item -->

            <a class="related-item" href="">
              <div class="related-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt="">
              </div><!-- /related-item-img -->
              <div class="related-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div><!-- /related-item-title -->
            </a><!-- /related-item -->

          </div><!-- /related-items -->
        </div><!-- /entry-related -->

      </article> <!-- /entry -->
      <?php
        endwhile;
      endif;
      ?>
    </main><!-- /primary -->

    <?php get_sidebar(); ?>




  </div><!-- /inner -->
</div><!-- /content -->

<!-- footer-menu -->
<div id="footer-menu">
  <div class="inner">
    <div class="footer-logo"><a href="/">TF-30</a></div><!-- /footer-logo -->
    <div class="footer-sub">サブタイトルが入りますサブタイトルが入ります</div><!-- /footer-sub -->

    <nav class="footer-nav">
      <ul class="footer-list">
        <li class="menu-item"><a href="#">メニュー1</a></li>
        <li class="menu-item"><a href="#">メニュー2</a></li>
        <li class="menu-item"><a href="#">メニュー3</a></li>
        <li class="menu-item"><a href="#">メニュー4</a></li>
        <li class="menu-item"><a href="#">メニュー5</a></li>
      </ul>
    </nav>

  </div><!-- /inner -->
</div><!-- /footer-menu -->

<?php get_footer(); ?>