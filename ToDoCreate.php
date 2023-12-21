<?php
require 'vendor/autoload.php' ;
use Classes\Model;
use Classes\Todo;
if(isset($_POST['submit'])) {
    Todo::create();  
    echo 'yes';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
<body>
    
    <?php require 'resources/views/include/navBar.php'?>
    <div class="container my-3">

    <h2>Add Todo</h2>

        <form action="index.php?action=store" method="post">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label>
                        Desc
                    </label>
                    <textarea type="text" class="form-control" name="desc" placeholder="Enter desc"></textarea>
                </div>
                <button type="submit" class="btn btn-primary my-2">Click to add ToDo</button>
        </form>

    </div>

</body>
</html>