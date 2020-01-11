<!doctype html>
<html lang="pl">
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="container rich-text">
          <main class="row content">
        <div class="col col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
          @yield('content')
        </div>
      </main>
      </div>
      
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>