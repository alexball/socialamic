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
		<td>
				size
		</td>
		<td>medium</td>
		<td>Dictates the size of the Tweet button. Options are:
			`medium`
			`large`
		</td>
	</tr>
</table>