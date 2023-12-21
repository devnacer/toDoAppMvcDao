<?php

namespace app\Controllers;

use app\models\ToDo;

class ToDoController extends BaseController
{
    /**
     * @return ToDo
     */
    // initaition 
    public static function getModel()
    {
        if (is_null(static::$model)) {
            static::$model = new ToDo();
        }
        return static::$model;
    }


 

    public static function createAction()
    {
        static::view('create');
    }

    public static function storeAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            var_dump($_POST);
            $created = static::getModel()
            ->setTitle($_POST['title'])
            ->setDesc($_POST['desc'])
            ->create();
            var_dump($create);
            //    if ($create === true) {
            //     static::redirect('list');
            // } else {
            //     echo "ERROR";
            // }
        }
    }

  



 
}