<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class GoogleSheetsPlugin
 * @package Grav\Plugin
 */
class GoogleSheetsPlugin extends Plugin
{
    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        $this->enable([
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ]);
    }

     /**
     * Do some work for this event, full details of events can be found
     * on the learn site: http://learn.getgrav.org/plugins/event-hooks
     *
     * @param Event $e
     */
    public function onTwigSiteVariables()
    {
		$twig = $this->grav['twig'];
        // Get a variable from the plugin configuration
        $sheets = $this->grav['config']->get('plugins.google-sheets');

        $twig->twig_vars['googlesheets'] = $sheets;
    }
}
