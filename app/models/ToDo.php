<?php
namespace app\models;

use PDO;

class ToDo extends Model
{
    private $title;
    private $desc;

    // Existing code...

    // Getter for title
    public function getTitle()
    {
        return $this->title;
    }

    // Setter for title
    public function setTitle($title)
    {
        $this->title = $title;
    }

    // Getter for desc
    public function getDesc()
    {
        return $this->desc;
    }

    // Setter for desc
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    
    public static function create()
    {   
        $sqls = static::databaseConn()->prepare('INSERT INTO todo VALUES (null, ?, ?)');

        return $sqls->execute([$title, $desc]);
    }

}
