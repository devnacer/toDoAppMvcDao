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

  



 
}