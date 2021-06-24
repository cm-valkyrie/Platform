<?php namespace BuriPHP\Libraries;

/**
 *
 * @package BuriPHP.Libraries
 *
 * @since 1.0.0
 * @version 1.1.0
 * @license You can see LICENSE.txt
 *
 * @author David Miguel Gómez Macías < davidgomezmacias@gmail.com >
 * @copyright Copyright (C) CodeMonkey - Platform. All Rights Reserved.
 */

defined('_EXEC') or die;

class Routes
{
    private $path;
    private $settings_url;

    public function __construct($path, $settings_url, $component = null)
    {
        $this->path = $path;
        $this->settings_url = $settings_url;
        $this->component = $component;
    }

    public function on_change_start()
    {
        // TODO
    }

    public function on_change_end()
    {
        // TODO
    }
}
