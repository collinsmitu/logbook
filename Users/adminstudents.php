<?php 
include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location:login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location:login.php");
}

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  
<div class="container">
<h1>STUDENTS</h1>
<table class="table table-striped">
  <thead  style="background-color: #008000;">
    <tr>
      <th scope="col">USERNAME</th>
      <th scope="col">EMAIL</th>
      <!--<th scope="col">course</th>
      <th scope="col">college</th>
      <th scope="col">date submitted</th>
      <th scope="col">status</th> -->
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
   </thead>
  <tbody>
    <?php 
      
    while ($row = mysqli_fetch_array($results)) { ?>
  	 <tr>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <!--<td><?php echo $row['course']; ?></td>
      <td><?php echo $row['college']; ?></td>
      <td><?php echo $row['date_submitted']; ?></td> -->
      </td>

      <td>

       <form action="edit.php" method="post">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          <button type="submit" class="btn btn-success  btn-sm" name="edit">
         <i class="fas fa-user-edit"></i>
        </button>
        </form>
</td>
      <td>
        
        <form action="function.php" method="post">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          <button type="submit" class="btn btn-danger  btn-sm" name="delete">
         <i class="fas fa-trash-alt"></i>
        </button>
        </form>
      </td>
	</tr>
  <?php } ?>
	 
  </tbody>

</div>
<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>
<script>
</script>
