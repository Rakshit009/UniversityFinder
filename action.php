<?php

include("database.php");

if(isset($_POST['query']) && !empty($_POST['option'])){
	$option = $_POST['option'];
	$output = '';
	$query = "SELECT * FROM $option WHERE Name LIKE '%".$_POST['query']."%'";
	$result = mysqli_query($conn,$query);
	$output = '<ul class="list-unstyled">';
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)){
			$output .='<li>'.$row['Name'].'</li>';
		}	
	}
	else
	{
	}
	$output .= '</ul>';
	echo $output;
}
else{
	$option = $_POST['option'];
	$output = '';
	$query = "SELECT * FROM College WHERE Name LIKE '%".$_POST['query']."%'";
	$result = mysqli_query($conn,$query);
	$output = '<ul class="list-unstyled">';
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)){
			$output .='<li>'.$row['Name'].'</li>';
		}	
	}
	else
	{
	}
	$output .= '</ul>';
	echo $output;
}

?>