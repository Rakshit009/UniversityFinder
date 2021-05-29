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
.customized{
  border:1px solid white; 
  width: 100px;
  color:white;
  font-size: 18px;
  margin-top: 3%
}
.customized:hover{
  background-color: white;
  color:#465754;
}
#show-list{
	background-color: white;
	color:black;
	width:500px;
	font-size: 18px;
}
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
   <center><form class="container" method="POST" action="index.php">
      <div class="form-group">
        <label for="exampleInputEmail1" style="color:white;font-size: 28px;margin-top: 14%;">Search University</label>
        <input style="padding:20px;width:70%;font-size: 18px;margin-top: 2%;" type="text" name="University_Name" class="form-control" id="search" aria-describedby="emailHelp" placeholder="Enter Name Here......">
     </div>
    <select class="form-select" style="width: 50%" id="Options" name="option">
        <option value="" disabled selected>Choose option</option>
        <option value="College">College</option>
        <option value="Courses">Course</option>
        <option value="Degree">Degree</option>
    </select>

     <div id="show-list">
     </div>
      <button type="submit" name="submit" class="btn customized">Search</button>
    </form></center>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#search').keyup(function(){
    			var query = $('#search').val();
    			var option = $('#Options').val();
    			if(query != ''){
    				$.ajax({
    					url:'action.php',
    					method:'post',
    					data:{query:query, option:option},
    					success:function(data){
    						$("#show-list").fadeIn();
    						$("#show-list").html(data);
    					}
    				});
    			}
    			else{
    				$('#show-list').html('');
    			}
    		});
    		$(document).on('click','li',function(){
    			$('#search').val($(this).text());
    			$('#show-list').html('');
    		})
    	});

    </script>
</body>
</html>

<?php

if(isset($_POST['submit'])){
  if(!empty($_POST['University_Name'])){
    $Univ_name = $_POST['University_Name'];
    session_start();
    $_SESSION['name'] = $Univ_name;
    header("Location:University.php");
    exit();
  }
}
?>
