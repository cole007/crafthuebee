# Huebee plugin for Craft CMS

[Huebee colour picker](http://huebee.buzz/) for Craft CMS

![Screenshot](resources/screenshots/plugin_logo.png)


## Installation

To install Huebee, follow these steps:

1. Download & unzip the file. Rename the `crafthuebee-master` directory to `crafthuebee` and place into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/cole007/crafthuebee.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require /crafthuebee`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `crafthuebee` for Craft to see it.  

Craft Huebee works on Craft 2.4.x and Craft 2.5.x.

## Craft Huebee Overview

Huebee is a simple color picker library replacing the default Craft color picker.

## Using Craft Huebee

When defining a Huebee field you can specify a default value. Otherwise the value will default to blank. 

## Craft Huebee Roadmap

Some things to do, and ideas for potential features:

* Fix issue with overlap from #container when picker is activated (CSS)
* Custom settings to specify which format (eg hrex, shorthex, hsl)

## Releases

* 1.0.2 Resolve issue/bug with array being provided as default settings value
* 1.0.1 Custom settings to specify custom colours as a predefined palette
* 1.0.0 Initial release

Brought to you by [@cole007](https://twitter.com/cole007) and [Our Name is Mud](http://ournameismud.co.uk/).  
This code is released under the [GNU GPL license v3](https://www.gnu.org/licenses/gpl-3.0.html) and extends the [license of Huebee](http://huebee.buzz/license.html) for open-source or personal use.
