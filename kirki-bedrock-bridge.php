<?php
/**
 * Plugin Name:     Kirki Bedrock Bridge
 * Plugin URI:      https://github.com/ItinerisLtd/kirki-bedrock-bridge/
 * Description:     Make Kirki work on Bedrock.
 * Version:         0.1.1
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     kirki-bedrock-bridge
 */

declare(strict_types=1);

namespace Itineris\KirkiBedrockBridge;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('kirki/config', function ($config): array {
    $config = (array) $config;

    $config['url_path'] = plugins_url('/kirki/');

    return $config;
});