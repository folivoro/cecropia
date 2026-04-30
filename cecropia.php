<?php

/**
 * Plugin Name: Cecropia
 * Description: Cecropia bootsraps the sloth framework in standalone folivoro projects
 * Version: 1.0.0
 */

use Sloth\Core\Application;

/**
 * Define SLOTH_START for timing
 */
defined('SLOTH_START') ? SLOTH_START : define('SLOTH_START', microtime(true));

/**
 * Configure and boot the sloth application container
 */
Application::configure()->boot();
