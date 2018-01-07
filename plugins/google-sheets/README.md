# Google Sheets Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of this plugin.**

The **Google Sheets** Plugin is for [Grav CMS](http://github.com/getgrav/grav). Reads and writes files to google sheets

## Installation

Installing the Google Sheets plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install google-sheets

This will install the Google Sheets plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/google-sheets`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `google-sheets`. You can find these files on [GitHub](https://github.com/cole-kainz/grav-plugin-google-sheets) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/google-sheets
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/google-sheets/google-sheets.yaml` to `user/config/plugins/google-sheets.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

## Usage

**Describe how to use the plugin.**

## Credits

**Did you incorporate third-party code? Want to thank somebody?**

## To Do

- [ ] Future plans, if any

