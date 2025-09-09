<?php
 include 'DB_connection.php';
?>
<?php


 if(isset($_POST['add_task']))
{
    
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);



    $query = "INSERT INTO  tasks (title,description) VALUES ('$title','$description')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Task Created Successfully";
        $_SESSION['message_code'] = "success";

        header("Location: create_task.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Task Not Created";
        $_SESSION['message_code'] = "error";

        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_task']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $query = "UPDATE tasks SET title='$title', description='$description' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "task Updated Successfully";
        $_SESSION['message_code'] = "success";

        header("Location: my_task.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "task Not Updated";
        $_SESSION['message_code'] = "error";

        header("Location: my_task.php");
        exit(0);
    }

}

if(isset($_POST['delete_task']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $query = "DELETE FROM tasks WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

   if($query_run)
    {
        $_SESSION['message'] = "Student deleted Successfully";
        $_SESSION['message_code'] = "success";

        header("Location: my_task.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not deleted";
        $_SESSION['message_code'] = "error";

        header("Location: my_task.php");
        exit(0);
    }

}
?>