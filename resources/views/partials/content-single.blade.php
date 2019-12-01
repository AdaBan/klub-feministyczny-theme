<article @php post_class() @endphp>
  <div class="col-xs-12 col-lg-8">
    <header>
        <h1 class="entry-title">{!! get_the_title() !!}</h1>
    </header>
    <div class="entry-content">
      @php the_content() @endphp
    </div>
  </div>
  <div class="col-xs-12 col-lg-4 offset-xl-1 col-xl-3">
    <div class="post__image-wrapper">
      @php the_post_thumbnail(); @endphp
    </div>
  </div>
</article>
