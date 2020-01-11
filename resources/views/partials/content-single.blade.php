<article @php post_class() @endphp>
  <div class="col-xs-12 col-md-4 rich-text">
    <header class="post__header post__header--mobile">
        <h1 class="post__entry-title">{!! get_the_title() !!}</h1>
    </header>
    <div class="post__image-wrapper">
      <div class="post__image" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>)">
    </div>
    <div class="post__image-caption">
      <?php echo the_post_thumbnail_caption($post->ID); ?>
    </div>
    </div>
    
  </div>
  <div class="col-xs-12 col-md-8 rich-text">
    <header class="post__header post__header--desktop">
        <h1 class="post__entry-title">{!! get_the_title() !!}</h1>
    </header>
    <div class="entry-content">
      @php the_content() @endphp
    </div>
    <?php
      $date = get_post_meta($post->ID, 'date', true);
      $hour = get_post_meta($post->ID, 'hour', true);
      $localization = get_post_meta($post->ID, 'localization', true);
      $fbLink = get_post_meta($post->ID, 'facebook', true);
    ?>
    <ul class="post__details">
        <li class="post__detail"
            <?php echo 'style=display:'.($date ? 'block' : 'none') ?>
        >
            <strong>Data:</strong>
            <?php echo $date, ($hour ? ', godz. ' : ''), $hour ?>
        </li>
        <li class="post__detail"
          <?php echo 'style=display:'.($localization ? 'block' : 'none') ?>
        >
            <strong>Miejsce:</strong> <?php echo $localization ?>
        </li>
        <li class="post__detail"
          <?php echo 'style=display:'.($fbLink ? 'block' : 'none') ?>
        >
            <strong>Wydarzenie na Facebooku:</strong>
            <a
              href="<?php echo $fbLink ?>"
              target="_blank"
            >link</a>
        </li>
    </ul>
    <div class="post__decor"></div>
  </div>
</article>
