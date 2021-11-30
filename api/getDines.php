<?php

include('databaseConnection.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


    $user_id=$_POST['user_id'];

	$query = "SELECT * FROM dines WHERE NOT user_id = $user_id";
    $result = databaseConnection($query);
    $data = new ArrayObject(array());
    $i=0;
    
   




    if($result== FALSE){
		echo "fallo conexión";
    }
    
    while($row = mysqli_fetch_assoc($result)){
        
        $currentUserId = $row["user_id"];
        $userQuery = "SELECT username FROM users WHERE id=$currentUserId";
        $userResult = databaseConnection($userQuery);
        
    //  debug_to_console("ppoop");
        if($userResult == FALSE){
            echo "fallo conexión2";
        }

        $user = mysqli_fetch_assoc($userResult);
        $username = $user["username"];

        // echo $username;

        $current = array(
            "username" => $username,
            "user_id" => $user,
            "name" => $row["name"],
            "description" => $row["description"],
            "score" => $row["score"],
            "restaurant" => $row["restaurant"],
            "address" => $row["address"],
            "date" => $row["date"],
            "image" => $row["image"]

        );

        $data -> append($current);
        
    
    };
        echo json_encode($data);

	

?>