Social:amic
===========
Version 0.2

A basic plugin for Statamic, which currently adds Twitter's official Tweet button to your post or page.

Installation
------------

### Download via Zip ###
Download the project by clicking "Zip" above. Add the entire folder to the `_add_ons/` directory.

### Install via Git ###
You can install this plugin via Git by navigating to your `_add_ons/` folder and running the command

	git clone git://github.com/alexball/socialamic.git socialamic
	
Usage
-----

Social:amic is currently quite basic. I'm working on honing development skills, so I've got to start somewhere, right?

For now, the only features is to add the official 'Tweet' button and the Google+ button to your posts or pages.

### Start with Scripts ###

Social:amic is designed to minimize the load time on your Statamic site by asynchronously rendering the Twitter and Google+ buttons. Currently, this loads both the scripts for Twitter and Google+. I need to update this so that you can select which scripts to include, like `{{ socialamic:scripts include="twitter|google" }}`. If you're well versed in PHP and want to let me know how this code works, hit me up on Twitter at [@AlexBall12](http://twitter.com/alexball12).

Include the following snippet in your layouts, right before the `</body>` tag.

	{{ socialamic:scripts }}
	
This will load up the scripts needed for the Tweet and +1 buttons.

### Tweet Button ###

To include the 'Tweet' button, simply drop this code into your theme:

	{{ socialamic:tweet }}
	
#### Parameters ####

The following parameters are currently available to the Social:amic tweet tag.

<table>
	<tr>
		<th>Parameter</th>
		<th>Default</th>
		<th>Function</th>
	</tr>
	<tr>
		<td><code>size</code></td>
		<td>medium</td>
		<td>Size of the Tweet button: <code>medium</code>, <code>large</code></td>
	</tr>
	<tr>
		<td><code>count</code></td>
		<td>none</td>
		<td>Placement of the count of Tweets: <code>none</code>, <code>horizontal</code>, <code>vertical</code></td>
	</tr>
</table>

#### Example ####

To include a large Tweet button that counts the number of tweets from that post/page:

	{{ socialamic:tweet size='large' count='horizontal' }}
	
*__Important:__ A large button with a veritcal count is currently not supported by Twitter. If you want to have a large button with a count, it must be horizontal*

### +1 Button ###

To include the Google+'s +1 button, simply drop this code into your theme:

	{{ socialamic:plusone }}
	
#### Parameters ####

The following parameters are currently available to the Social:amic plusone tag.

<table>
	<tr>
		<th>Parameter</th>
		<th>Default</th>
		<th>Function</th>
	</tr>
	<tr>
		<td><code>size</code></td>
		<td>medium</td>
		<td>Size of the +1 button: <code>small</code>, <code>medium</code>, <code>standard</code>, <code>tall</code></td>
	</tr>
	<tr>
		<td><code>count</code></td>
		<td>none</td>
		<td>Placement of the count of Tweets: <code>none</code>, <code>bubble</code>, <code>inline</code></td>
	</tr>
</table>

#### Example ####

To include a large Tweet button that hides the number of +1's from that post/page:

	{{ socialamic:plusone size='small' count='none' }}
	
Issues, Suggestions, and More
-----------------------------

If you come across any issues with this plugin (doubtful, considering it's so simple), report them on GitHub. If you want to contact me, find me on Twitter [@AlexBall12](http://twitter.com/alexball12).

Future plans to this plugin include:
- Incorporate Twitter's follow button
- Incorporate Facebook's Like button
- Incorporate Google+'s Plus 1 button (anyone actually use this??)

Other ideas to include? Let me know. Thanks!