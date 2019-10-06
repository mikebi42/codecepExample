# Codecep Example Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of the plugin.**

This plugin gives a skeleton to follow for incorporating codeception unit
test into a plugin while still allowing access to grav variable.

The **Codecep Example** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav). example of codeception unit test

## Installation

Installing the Codecep Example plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install codecep-example

This will install the Codecep Example plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/codecep-example`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `codecep-example`. You can find these files on [GitHub](https://github.com//grav-plugin-codecep-example) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/codecep-example
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com//grav-plugin-codecep-example/blob/master/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/codecep-example/codecep-example.yaml` to `user/config/plugins/codecep-example.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named codecep-example.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

**Describe how to use the plugin.**
Run `composer update` to install the testing dependencies. Then run `composer test` in the root folder.

## Credits
Thanks to the Grav team for having codeception in the core.
This pluging copies the bootstrap code.


## To Do

- [ ] Future plans, if any

