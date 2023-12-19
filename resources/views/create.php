<?php
$titlePage = "Add ToDo";
ob_start();
?>
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
<?php
$content = ob_get_clean();
include_once 'layout.php';
