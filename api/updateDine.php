<?php

include('databaseConnection.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

    $id=$_POST['id'];
	$name=$_POST['name'];
	$description=$_POST['description'];
	$score=$_POST['score'];
    $restaurant=$_POST['restaurant'];
    $address=$_POST['address'];
    $date= $_POST['date'];
    $image='./images/coffee.jpeg';


	
	$query = "UPDATE dines SET name='$name', description='$description', score='$score', restaurant='$restaurant',address='$address', date='$date' WHERE id=$id";
    echo $query;

	if(!databaseConnection($query)){
        echo "Error";
        
	}else{
        debug_to_console("Test");
	}


?>