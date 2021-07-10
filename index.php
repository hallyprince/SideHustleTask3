<?php
require_once ("config.php");
?>
<html>
<head>
    <title> todos</title>
</head>
<body>
<h2>
    My next agenda
</h2>
<p><a href="dashboard.php">add todo</a></p>

<?php
$query  = "SELECT id, todoTitle, todoDescription, date FROM todo_db";
$result = mysqli_query($conn, $query);
//checking for data in the todo table
if(mysqli_num_rows($result) >= 1){
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $title = $row['todoTitle'];
        $date = $row['date'];

 ?>

    <ul>
        <li><a href="update.php?id= <?php echo $id?>"> <?php echo $title ?></a></li> 
        <?php echo "[[$date]]";?>
        <button type="button"><a href="edit.php?id=<?php echo $id?>">Edit</a></button>
        <button type="button"><a href="delete.php?id=<?php echo $id?>">Delete</a></button>
    </ul>
<?php
    }
}

?>


</body>