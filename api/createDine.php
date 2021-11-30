<?php

include('databaseConnection.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

    $user_id=$_POST['user_id'];
	$name=$_POST['name'];
	$description=$_POST['description'];
	$score=$_POST['score'];
    $restaurant=$_POST['restaurant'];
    $address=$_POST['address'];
    $date= $_POST['date'];
    $image='./images/coffee.jpeg';


	
	$query = "INSERT INTO dines(user_id,name, description,score,restaurant,address,date,image) VALUES ($user_id, '$name','$description','$score','$restaurant','$address', '$date','$image')";

    echo $query;
	if(!databaseConnection($query)){
        echo "Error";
        
	}else{
        debug_to_console("Test");
	}


?>