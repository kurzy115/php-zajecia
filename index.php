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

const DEFAULT_ACTION = 'list';

// $_GET - zapytanie serwera
// $_POST - wysłanie do serwera

 $action = $_GET['action'] ?? DEFAULT_ACTION;

 $viewParams = [];

if ($action === 'create') {
    $viewParams['resultCreate'] = 'Udało się dodac notatkę!';
$page = 'create';
} else {
    $page = 'list';
    $viewParams['resultList'] = 'Wyświetlamy listę notatek!';
}

 $view = new View();
 $view->render($page, $viewParams);