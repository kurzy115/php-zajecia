<?php

namespace App;

require_once('./Exception/AppException.php');
require_once('./Exception/StorageException.php');
require_once('./Exception/ConfigurationException.php');
include_once('./src/Controller.php');
include_once('./src/utils/debug.php');
require_once('./config/config.php');

use App\Exception\AppException;
use App\Exception\StorageException;
use App\Exception\ConfigurationException;
use Throwable;

const DEFAULT_ACTION = 'list';

try{
    Controller::initConfiguration($configuration);
    $controller = new Controller($_GET, $_POST);
    $controller->run();
} catch (AppException $e) {
    echo "<h1>Wystąpił błąd w aplikacji</h1>";
    echo '<h3>' . $e->getMessage() . '</h3>';
} catch (Throwable $e) {
    echo "<h1>Wystąpił błąd w aplikacji</h1>";
}
