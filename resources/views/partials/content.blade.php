<div class="col-xs-12 col-md-6 col-lg-4">
    <article
        class="teaser teaser--<?php echo get_the_category($post->ID)[0]->slug; ?>"
    >
        <div class="teaser__inner">
            <div class="teaser__text-wrapper">
                <span><?php //$ar = get_the_category($post->ID); echo $ar[0]->slug; 
                if (get_the_category($post->ID)[0]->slug == 'blablabla') {}


                ?></span>
                <h3 class="teaser__title">
                    <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
                </h3>
                <div class="teaser__details">
                    <p class="teaser__detail">
                        <?php echo get_post_meta($post->ID, 'date', true); ?>
                    </p>
                    <p class="teaser__detail">
                        <?php echo get_post_meta($post->ID, 'localization', true); ?>
                    </p>
                </div>
                <p class="teaser__description">
                    <?php echo get_the_excerpt($post->ID); ?>
                </p>
            </div>
        </div>
    </article>
</div>

