<?php

namespace app\models;

use PDO;

class ToDo extends Model
{
    private $title;
    private $desc;


    public static function create()
    {
        $sqls = static::databaseConn()->prepare('INSERT (?, title, descri) INTO todo WHERE (id = ?, title = ?, descri = ?)');
        return $sqls->execute([$this->title, $this->desc]);
    }


   
}