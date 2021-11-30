<?php

include('databaseConnection.php');

// function debug_to_console($data) {
//     $output = $data;
//     if (is_array($output))
//         $output = implode(',', $output);

//     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
// }
    $id=$_POST['id'];

	$query = "SELECT * FROM dines WHERE id = $id";
    $result = databaseConnection($query);
    

    



    if($result== FALSE){
		echo "fallo conexión";
    }
    
        $row = mysqli_fetch_assoc($result);
        
        $current = [
            "id" => $row["id"],
            "name" => $row["name"],
            "description" => $row["description"],
            "score" => $row["score"],
            "restaurant" => $row["restaurant"],
            "address" => $row["address"],
            "date" => $row["date"],
            "image" => $row["image"]
        ];

   
        
    
   
        echo json_encode($current);

	

?>