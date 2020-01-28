<?php

namespace Tonik\Theme\App;

use Tonik\Gin\Asset\Asset;
use Tonik\Gin\Foundation\Theme;
use Tonik\Gin\Template\Template;

/**
 * Gets theme instance.
 *
 * @param string|null $key
 * @param array $parameters
 *
 * @return \Tonik\Gin\Foundation\Theme
 */
function theme($key = null, $parameters = [])
{
    if (null !== $key) {
        return Theme::getInstance()->get($key, $parameters);
    }

    return Theme::getInstance();
}

/**
 * Gets theme config instance.
 *
 * @param string|null $key
 *
 * @return array
 */
function config($key = null)
{
    if (null !== $key) {
        return theme('config')->get($key);
    }

    return theme('config');
}

/**
 * Renders template file with data.
 *
 * @param  string $file Relative path to the template file.
 * @param  array  $data Dataset for the template.
 *
 * @return void
 */
function template($file, $data = [])
{
    $template = new Template(config());

    return $template
        ->setFile($file)
        ->render($data);
}

/**
 * Gets asset instance.
 *
 * @param  string $file Relative file path to the asset file.
 *
 * @return \Tonik\Gin\Asset\Asset
 */
function asset($file)
{
    $asset = new Asset(config());

    return $asset->setFile($file);
}

/**
 * Gets asset file from public directory.
 *
 * @param  string $file Relative file path to the asset file.
 *
 * @return string
 */
function asset_path($file)
{
    return asset($file)->getUri();
}

/**
 * Check that a template has the required props.
 *
 * @param  string $file Relative file path to the asset file.
 *
 * @return string
 */
function check_required_props()
{
    $props = func_get_args();
    $props_are_valid = true;

    foreach ($props as $prop) {
        if (!isset($prop)) {
            $props_are_valid = false;
        }
    }

    if (!$props_are_valid) {
        $file = debug_backtrace()[0]['file'];
        $styles = 'color: red; font-weight: 700; text-align: center; padding: 50px 0;';
        exit('<p style="' . $styles . '">Required props where not passed to the following template:<br>' . $file . '</p>');
    }
}
