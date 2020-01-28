<?php

use function Theme\App\check_required_props;

// check for required props & if not render error
check_required_props($example_prop);
?>

<h1>
    <?= $example_prop; ?>
</h1>
