=== body-class-extender ===
Contributors: rschrenk
License: GPL v3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Allows to add classnames to the body tag via url parameters

== Description ==
Once this plugin is enabled you can pass a list of classnames by an url parameter, that should be added to the body-tag. These classnames will be prefixed with \"extend-\", so that they do not overwrite existing classnames.

For example, you call

https://myblog.com/page-xyz/?bodyclasses=abc,def

This plugin will add the following classnames to the bodytag:

extended-abc extended-def

You can use  those classnames in CSS-selectors to modify the page layout to your needs.
