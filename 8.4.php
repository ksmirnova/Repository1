<?php

    $link = mysqli_connect("localhost", "cl29-users-bzh", "YTTMcfhK.", "cl29-users-bzh");

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    } 

    // $query = "INSERT INTO `users` (`email`, `password`) VALUES('yaroslavv@gmail.com', 'ilovemydad')";

    $query = "UPDATE `users` SET password = 'uedjUFH7^%' WHERE email = 'yaroslavv@gmail.com' LIMIT 1";

    mysqli_query($link, $query);

    $query = "SELECT * FROM users";

    if ($result = mysqli_query($link, $query)) {
        
        $row = mysqli_fetch_array($result);
        
        echo "Your email is ".$row[1]." and your password is ".$row[2];
        
    }


?>
