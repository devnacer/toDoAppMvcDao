<?php
namespace Classes;

class Redirect{

    public static function redirect($route)
        {
            header("location: index.php?action=$route");
        }
}
?>