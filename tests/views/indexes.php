<?php

/**
 * PHPPgAdmin v6.0.0-beta.51
 */

// Include application functions

$do_render = false;
if (!defined('BASE_PATH')) {
    require_once '../../src/lib.inc.php';
    $do_render = true;
}
$controller = new \PHPPgAdmin\Controller\IndexesController($container);
if ($do_render) {
    $controller->render();
}
