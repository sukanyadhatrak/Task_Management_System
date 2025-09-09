<?php
 include 'DB_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Task</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <input type="checkbox" id="checkbox">
	<?php include "inc/header.php" ?>
	<div class="body">
			<?php include "inc/nav.php" ?>
    <div class="container mt-4">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Task Details
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <thead>

              <tr>
                <th>id </th>
                <th>title</th>
                <th>description </th>
              <th>status </th>
                <th>Action</th>
            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tasks";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $tasks)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $tasks['id']; ?></td>
                                                <td><?= $tasks['title']; ?></td>
                                                <td><?= $tasks['description']; ?></td>
                                                <td><div class="input-holder">
            <select name="status" id="status">
                <option value= "0">--Select--</option>
                <option>Pending</option>
                <option>Ongoing</option>
                <option>Completed</option>
              </select>     
             </div></td>
                                                <td>
                                                    <a href="edit_task.php?RegId=<?= $tasks['id']; ?>"  class="btn btn-success btn-sm">Edit</a>
                                                     <button class="btn btn-danger btn-sm delete_task" value="<?= $tasks['id']; ?>" >Delete</button>
                                                    
                                                </td>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>