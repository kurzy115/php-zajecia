<?php

namespace App;

include_once('./src/Controller.php');
include_once('./src/utils/debug.php');


$controller = new Controller($_GET, $_POST);
$controller->run();