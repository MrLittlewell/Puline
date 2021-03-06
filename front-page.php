<?php get_header(); ?>
<?php
$slider = get_field('main-slider', 8);
$singleCategory = get_field('recommended_products', 8);
?>
<main>
  <section>
    <div class="swiper-container front-slider">
      <div class="swiper-wrapper">
        <?php foreach ($slider as $slide) {
        ?>
          <div class="swiper-slide">
            <div class="slider-content">
              <p><?php echo $slide['description'] ?></p>
              <h2><?php echo $slide['title'] ?></h2>
              <?php if ($slide['link']) { ?>
                <a href="<?php echo $slide['link'] ?>">подробнее</a>
              <?php } ?>
            </div>
            <img src="<?php echo $slide['image']['url']; ?>" alt="">
          </div>
        <?php } ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <section class="container-l recommended-container animate__animated animate__fadeIn" data-wow-offset="150">
    <h2>Рекомендуемые</h2>
    <div class="swiper-container recommended">
      <div class="swiper-wrapper">
        <?php include 'search-category.php' ?>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </section>

  <section class="main-feature">
    <div class="main-feature-container">
      <?php $block_info = get_field('block_info', 8); ?>
      <div class="left-block">
        <div class="img-wrapper">
          <img class="start_hidden animate__animated animate__fadeInLeftBig" src="<?= $block_info['left_block']['left_image']['url']; ?>" alt="" data-wow-offset="150">
        </div>
        <div class="info-content animate__animated animate__fadeInLeftBig" data-wow-offset="">
          <h2><?= $block_info['left_block']['left_headline'] ?></h2>
          <p><?= $block_info['left_block']['left_description'] ?></p>
          <?php if ($block_info['left_block']['left_link']) { ?>
            <a class="link" href="<?= $block_info['left_block']['left_link']['url'] ?>">
              - подробнее
            </a>
          <?php } ?>
        </div>
      </div>
      <div class="right-block">
        <div class="img-wrapper">
          <img class="start_hidden animate__animated animate__fadeInRightBig" src="<?= $block_info['right_block']['right_image']['url']; ?>" alt="" data-wow-offset="150">
        </div>
        <div class="info-content animate__animated animate__fadeInRightBig" data-wow-offset="0">
          <h2><?= $block_info['right_block']['right_headline'] ?></h2>
          <p><?= $block_info['right_block']['right_description'] ?></p>
          <?php if ($block_info['right_block']['right_link']) { ?>
            <a class="link" href="<?= $block_info['right_block']['right_link']['url'] ?>">
              - подробнее
            </a>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <section class="main-info-content">
    <div class="container-l">
      <div class="general_info">
        <?php
        $general_info = get_field('general_info', 8);
        ?>
        <div class="general_info_subheadline animate__animated animate__fadeInLeftBig" data-wow-offset="0"><?= $general_info['subheadline'] ?></div>
        <div class="general_info_headline animate__animated animate__fadeInRightBig" data-wow-offset="0"><?= $general_info['headline'] ?></div>
        <div class="general_info_description animate__animated animate__fadeInUpBig" data-wow-offset="0">
          <?= $general_info['description'] ?>
        </div>
      </div>
    </div>
  </section>
  <section>
    <?= do_shortcode('[instagram-feed]'); ?>
  </section>
</main>
<script>

</script>
<?php get_footer(); ?>