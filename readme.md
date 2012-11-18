Social:amic
===========

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

Social:amic is currently quite basic. I'm working on honing development skills, so I've got to start somewhere, right? I have plans on adding a lot to this plugin, including Facebook aspects, additional Twitter features, maybe some Google+ and anything else people want.

For now, the only feature is to add the official 'Tweet' button to your posts or pages.

### Calling in your theme ###

To include the 'Tweet' button, simply drop this code into your theme:

	{{ socialamic:tweet }}
	
### Parameters ###

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

	{{ socialamic:tweet size='large' count='vertical' }}
	
Issues, Suggestions, and More
-----------------------------

If you come across any issues with this plugin (doubtful, considering it's so simple), report them on GitHub. If you want to contact me, find me on Twitter [@AlexBall12](http://twitter.com/alexball12).

Future plans to this plugin include:
- Incorporate Twitter's follow button
- Incorporate Facebook's Like button
- Incorporate Google+'s Plus 1 button (anyone actually use this??)

Other ideas to include? Let me know. Thanks!