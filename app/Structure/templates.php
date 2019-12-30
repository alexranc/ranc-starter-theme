<?php

namespace Tonik\Theme\App\Structure;

use function Tonik\Theme\App\theme;

/*
|-----------------------------------------------------------
| Theme Templates Actions
|-----------------------------------------------------------
|
| This file purpose is to include your templates rendering
| actions hooks, which allows you to render specific
| partials at specific places of your theme.
|
*/

/**
 * Load theme template actions files from their own directory.
 *
 * Instead of having one large file for all render actions, we break them apart
 * into their own individual file and place them in the 'Templates' directory.
 * All files in this directory will be included below.
 */
$app_directory = theme('config')['paths']['directory'] . '/' .theme('config')['directories']['app'];
$actions_directory = $app_directory . '/Structure/actions/';

foreach (glob($actions_directory  . '/*.php') as $filename)
{
    include_once $filename;
}
