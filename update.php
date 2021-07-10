
<?php
require_once "config.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "SELECT todoTitle, todoDescription, date FROM todo_db WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        if($row){
            $title = $row['todoTitle'];
            $description = $row['todoDescription'];
            $date = $row['date'];

            echo "
            <h3>$title</h3>
            <h4>description</h4>
            <p>$description</p>
            <small>$date</small>
            ";
        }
    }else{
        echo 'no todo';
    }
}
?>