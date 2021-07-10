<?php
require_once ("config.php");
if(isset($_POST['submit'])){
    // passing the data into variable
    $title = $_POST['todoTitle'];
    $description = $_POST['todoDescription'];

    // check for empty title
    if(empty($title)){
    echo "Title cannot be empty";
    } 
    
    // check for empty desription
    if(empty($description)){
        echo "Description cannot be empty";
    }else{

    // connect to database
    $query = "INSERT INTO todo_db(todoTitle, todoDescription, date) VALUES ('$title', '$description', now() )";
    $insertTodo = mysqli_query($conn, $query);
    if($insertTodo){
        echo "You added a new todo";
    }else{
        echo mysqli_error($conn);
    }

}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Todo list</title>
 
</head>
<style>
    
.form{
         width: 300px;
         padding: 30px 25px;
         margin: 50px auto;
         background: white;
}

h1.todo-title{
        color: #660;
        margin: 0px auto 25px;
        font-size: 30px;
        font-weight: 100;
      
        
}
.todo-input{
    padding: 10px; 
    margin-bottom: 25px;
     width: 20%;
     height: 20px;
         
     }
 
     
 .todo-button{
         color: #fff;
         background: #55a1ff;
         
         width: 20%;
         height: 50px;
         
     }

    </style>
<body>
<form method = "POST" action = "dashboard.php"> 
<button type="submit"><a href="index.php">View all Todo</a></button>
<h1 class= "todo-title"> Todo List</h1>
<p>Todo title:</p>
<input type="text" class="todo-input" name="todoTitle" >
 <p>Todo desription:</p>
 <input name = "todoDescription" type = "test" class = "todo-input">
    <br>
     <input type = "submit" value ="submit" name = "submit" class = "todo-button">

  </form>
</body>
</html>