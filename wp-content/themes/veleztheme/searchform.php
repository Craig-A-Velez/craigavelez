<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text">Search:</span>
		<input type="search" class="search-field" placeholder="Search …" value="<?php echo get_search_query(); ?>" name="s" title="Search for:">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>">
</form>