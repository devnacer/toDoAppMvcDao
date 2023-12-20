<?php
require_once 'vendor/autoload.php';

use app\Controllers\ToDoController;
//yes
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {

        case 'create':
            ToDoController::createAction();
            break;
    
        case 'store':
            ToDoController::storeAction();
            break;
    
        default:
            echo "ERROR";
            break;
    }
}