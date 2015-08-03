<?php
$date = date_i18n( get_option( 'date_format' ), strtotime( get_the_date('r') ) );
?>

<div id="post-meta" class="post-meta">
	<p>
		<?php printf( __('Published %s', 'entry'), $date ); ?>
	</p>
</div>