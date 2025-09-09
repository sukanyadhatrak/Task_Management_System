<?php
 include 'DB_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Task</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
  	<link rel="stylesheet" href="css/style1.css">

</head>
<body>
	<input type="checkbox" id="checkbox">
	<?php include "inc/header.php" ?>
	<div class="body">
			<?php include "inc/nav.php" ?>

		<section class="section-1">
			<div class="container">
    <h2>Update Task</h2>
    <?php
             if(isset($_GET['id']))
                        {
              $id = mysqli_real_escape_string($con, $_GET['id']);
                  $query = "SELECT * FROM tasks WHERE id='$id' ";
                    $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $tasks = mysqli_fetch_array($query_run);
                            
                                ?>
                                

    <form action="add_task.php" method="post">
     <input type="hidden" name="id" value="<?= $tasks['id']; ?>">

      <div class="input-group">
        <label>Title</label>
        <input type="text" id="title" name="title" value="<?=$tasks['title'];?>">

      </div>

      <div class="input-group">
        <label>Description</label>
        <input type="text" id="description" name="description" value="<?=$tasks['description'];?>" required />
      
      <button type="submit" name="update_task" >Update</button>
            </div>

    </form>
                   <?php                            
                          }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
  </div>
		</section>
	</div>

</body>
</html>
