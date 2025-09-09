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
    <h2>Create Task</h2>
    
    <form action="add_task.php" method="post">
      <div class="input-group">
        <label>Title</label>
        <input type="text" id="title" name="title" placeholder="Enter your title" required />
      </div>

      <div class="input-group">
        <label>Description</label>
        <input type="text" id="description" name="description" placeholder="Write Description" required />
      </div>
      </br>
      <!--<div class="input-holder">
        <label>Status</label>
            <select name="status" id="status">
                <option value= "0">--Select--</option>
                <option>Pending</option>
                <option>Ongoing</option>
                <option>Completed</option>
              </select>     
             </div>-->

       
      <button type="submit" name="add_task" class="btn">Add</button>

    </form>
  </div>
		</section>
	</div>

</body>
</html>
