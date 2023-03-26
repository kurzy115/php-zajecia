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

 switch ($action) {
    case 'create';
    $page= 'create';
    $created = false;
    
if (!empty($_POST)) {
    $viewParams = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
    
    ];
    $created = true;
}
$viewParams['created'] = $created;
break;
default:
$page = 'list';
    $viewParams['resultList'] = 'Wyświetlamy listę notatek!';
    break;
}

 $view = new View();
 $view->render($page, $viewParams);