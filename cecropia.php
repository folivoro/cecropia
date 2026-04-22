<?php

/**
 * Plugin Name: Cecropia
 * Description: Cecropia bootsraps the sloth framework in standalone folivoro projects
 * Version: 1.0.0
 */

use Sloth\Core\Application;

add_action('after_setup_theme', function (): void {
    Application::configure()->boot();
}, 0);
