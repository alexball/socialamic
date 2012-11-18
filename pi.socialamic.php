<?php
class Plugin_socialamic extends Plugin {

	var $meta = array(
		'name'		 => 'Social:amic',
		'version'	 => '0.1',
		'author'	 => 'Alex Ball',
		'author_url' => 'http://alexball.tv'
	);

	public function tweet()
	{
		$size = $this->fetch_param('size', 'medium');
		$count = $this->fetch_param('count', 'none');

		$output = '
			<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="{{ url }}" data-text="{{ title }}" data-count="'.$count.'" data-size="'.$size.'">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		';
		return $output;
	}
}