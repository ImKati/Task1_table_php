

<?php
if ($_GET['del']){
    $query = "DELETE FROM workers WHERE id='{$_GET['del']}'";
}
?>