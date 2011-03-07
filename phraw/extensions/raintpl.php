<?php
/**
 * Raintpl extension.
 *
 * The Raintpl template engine can be found here: http://www.raintpl.com/
 * 
 * @copyright Copyright (C) 2010-2011 Davide Muzzarelli <davide@davideweb.com>. All rights reserved.
 * @license BSD, see LICENSE.txt for more details.
 */
 
require_once('raintpl/rain.tpl.class.php');

/**
 * RainTPL, the default template engine for Phraw.
 */ 
class RaintplTemplateEngine extends RainTPL {
    /**
     * Display a client error page.
     * 
     * @param int $type Type of message. Default: 404 Page Not Found.
     */
    function display_error($type=404) {
        Phraw::client_error($type);
        $this->draw($type);
    }
}

RaintplTemplateEngine::$tpl_dir = RESOURCES_DIR . '/templates/';
RaintplTemplateEngine::$cache_dir = RESOURCES_DIR . '/cached/';
?>