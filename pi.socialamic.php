<?php
class Plugin_socialamic extends Plugin {

	var $meta = array(
		'name'		 => 'Social:amic',
		'version'	 => '0.2',
		'author'	 => 'Alex Ball',
		'author_url' => 'http://alexball.tv'
	);

	public function scripts()
	{
		$output = "
			<script type='text/javascript'>
				!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');
			</script>
			<script type='text/javascript'>
				(function() {
					var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				})();
			</script>
		";
		return $output;
	}

	public function tweet()
	{
		$size = $this->fetch_param('size', 'medium');
		$count = $this->fetch_param('count', 'none');

		$output = '
			<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="{{ permalink }}" data-text="{{ title }}" data-count="'.$count.'" data-size="'.$size.'">Tweet</a>
		';
		return $output;
	}

	public function plusone()
	{
		$size = $this->fetch_param('size', 'medium');
		$count = $this->fetch_param('count', 'bubble');

		$output = '
			<g:plusone size="'.$size.'" href="{{ permalink }}"></g:plusone>
		';
		return $output;
	}
}