<?php
error_reporting(0);
include("database.php");
session_start();
if(isset($_SESSION['name'])){
  echo $name;
  $name = $_SESSION['name'];
  $query = "SELECT * FROM College WHERE Name = '$name' ";
  $result = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>UniversityFinder</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style type="text/css">

</style>
</head>
<body style="background-color: #A8C3E5">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">University Finder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="col-md-12">
    <h1 style="text-align:center;color:white;margin-top:2%;"><?php echo $row['Name']; ?></h1>
    <center><img src="<?php echo "Images/".$row['Image'] ?>" width="50%" style="margin:2%"></center>
    <center><p style="color:white;font-size: 18px;"><?php echo $row['details']; ?></p></center>
  </div>
</body>
</html>