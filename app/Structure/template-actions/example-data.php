<?php

/**
 * Example theme template action.
 */
function example_data()
{
    return ['example_prop' => 'Hello World'];
}
add_action('example_data', 'Tonik\Theme\App\Structure\example_data');
