<header class="page-header">
  <div class="container">
  	<div class="page-header__inner">
  		<a
	    	class="page-header__brand"
	    	href="{{ home_url('/') }}"
		>
	    	{{ get_bloginfo('name', 'display') }}
	    </a>
	    <nav class="page-header__navigation main-navigation">
	      @if (has_nav_menu('primary_navigation'))
	        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
	      @endif
	    </nav>
  	</div>
  </div>
</header>
