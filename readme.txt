=== Was Here Recent Readers Widget ===
Contributors: arvincastro
Donate link: http://sudocode.net/about/
Tags: widget, sidebar, reader, visitor, guest
Requires at least: 2.8.0
Tested up to: 3.2.1
Stable tag: 1.2

Adds a widget in the Dashboard's Widgets menu to place the Was Here App to display recent visitors in the sidebar.

== Description ==

This plugin adds the option in your Widgets menu to add the 3rd-party **Was Here** widget to your blog's sidebar.

The Was Here widget lets you see the people who have recently visited your blog; but more specifically,
it is a Facebook application that tracks users that visit your blog and displays their current Facebook
profile pictures.

More info can be found at the [Was Here project page] [washere].

[washere]: http://sudocode.net/projects/was-here/

== Installation ==

1. Upload `was-here.php` and `was-here.css` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to the `Widgets` menu in WordPress and drag the `Was Here` widget to the sidebar

== Frequently Asked Questions ==

= Why are there still no avatars displayed on the sidebar widget? =

As the Was Here widget is actually a Facebook application, first-time users need to authorize the application
to be able to participate. You can ask your readers to click the Was Here icon in your sidebar to join.

Secondly, the application can only recognize users if they are logged in to Facebook on the same browser
they are using while visiting your blog.

= Do users need to click the Was Here icon everytime they visit my blog? =

No. Once the user adds the Was Here application to their Facebook account, their visits to your blog and any other site or blog
that uses this widget will be counted while they are signed in to Facebook.

= Can users choose not to display their pictures on my blog? =

Yes. Users can set their *visibility* on specific sites by clicking the Was Here icon on that particular blog
to bring up the user page popup. They can then set the visibility status to either public or private.

= How can I modify the the appearance of the widget? =

A CSS file is included in the plugin, was-here.css, and it contains the default style of the widget.
You can modify the style in that same file but be warned that upgrading this plugin in the future may
overwrite your changes.

== Screenshots ==

1. The Was Here Widget displays the Facebook profile pictures of people who have recently visited your blog.
2. After activating the plugin, go to your WordPress Widgets Menu to add the Was Here widget to the sidebar.
3. Other people could participate by clicking the Was Here icon on your sidebar and authorizing the application via Facebook

== Changelog ==

= Version 1.2 =

* no changes

= Version 1.1 =

* Added clear property in was-here.css to avoid conflicts wth other css declarations in themes

= Version 1 =

* Initial release.
* Add the Was Here widget in the Widgets menu of WordPress.
* A CSS file, was-here.css, is included that sets the default style of the widget.

== Upgrade Notice ==

= Version 1 =

* Initial release.