<?php

declare(strict_types=1); 

namespace App;

/* include
include_once
require
require_once
 */
include_once('./src/view.php');
include_once('./src/utils/debug.php');

// $_GET - zapytanie serwera
// $_POST - wysłanie do serwera

 $action = $_GET['action'] ?? null;


 $view = new View();
 $view->render($action);