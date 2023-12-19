<?php

namespace app\models;
use PDO;

class Model
{
    protected $id;
    protected static $conn;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return PDO
     */
    public static function databaseConn()
    {
        if (is_null(static::$conn)) {
            static::$conn = new PDO('mysql:connname=todo;host=localhost', "root", "");
        }
        return static::$conn;
    }

}