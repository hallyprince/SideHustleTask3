

<?php
require_once ("config.php");
// check for delete

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM todo_db WHERE id = '$id'";
    $delete = mysqli_query($conn, $query);
    if($delete){
        echo 'Todo successfully deleted';
    }
}
?>
