<?php

include('databaseConnection.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


    $id=$_POST['id'];

	
	
	$query = "DELETE FROM dines WHERE id=$id";

	if(!databaseConnection($query)){
       echo "First Error";
	}else{
    echo "Second Good";
    
    }
?>