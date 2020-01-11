<header class="page-header">
  <div class="container">
  	<div class="page-header__inner">
  		<a
	    	class="page-header__brand"
	    	href="{{ home_url('/') }}"
		>
	    	{{ get_bloginfo('name', 'display') }}
	    </a>
	    <button
	    	class="page-header__navigation-button"
	    	data-navigationButton
    	>
			<svg
				class="page-header__navigation-icon page-header__navigation-icon--close"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 24 24"
			>
				<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
				<path d="M0 0h24v24H0z" fill="none"/>
			</svg>
			<svg
				class="page-header__navigation-icon page-header__navigation-icon--open"
				xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 24 24"
			>
				<path d="M0 0h24v24H0z" fill="none"/>
				<path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
			</svg>
		</button>
	    <nav
	    	class="page-header__navigation main-navigation"
	    	data-navigation
    	>
	      @if (has_nav_menu('primary_navigation'))
	        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
	      @endif
	    </nav>
  	</div>
  </div>
</header>
<script>
	const $body = document.querySelector('body')
	const $navigationButton = document.querySelector('[data-navigationButton]')
	const $navigation = document.querySelector('[data-navigation]')

	function toggleNavigation() {
		$body.classList.toggle('scroll-disabled')
		$navigationButton.classList.toggle('-is-open')
		$navigation.classList.toggle('-is-open')
	}

	if ($navigationButton) {
		$navigationButton.addEventListener('click', toggleNavigation)
	}

</script>
