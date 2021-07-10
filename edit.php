<?php
require_once ("config.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT todoTitle, todoDescription FROM todo_db WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
        if($row){
            $title = $row['todoTitle'];
            $description = $row['todoDescription'];

            echo "
                <h2>Edit Todo</h2>
                
            <form action='edit.php?id=$id' method='post'>
            <p>Title</p>
             <input type='text' name='title' value='$title'>
             <p>Description</p>
             <input type='text' name='description' value='$description'>
             <br>
             <input type='submit' name='submit' value='edit'>
            </form>
            ";
        }
    }else{
        echo "Falled to update todo";
    }


    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        
        $query = "UPDATE todo_db SET todoTitle = '$title', todoDescription = '$description'  WHERE id = '$id'";
        $insertEdited = mysqli_query($conn, $query);
        if($insertEdited){
            echo " Todo successfully updated";
        }
        else{
            echo mysqli_error($conn);
        }
    }


}
?>
