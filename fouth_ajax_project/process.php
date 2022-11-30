<?php

//  Connect To Database
$conn = mysqli_connect("localhost:3330", "root","khunTun1997","ajax_projects");




echo "Khun....";

//  Check for GET variable
if(isset($_GET['name'])){
        // echo 'GET: Your name is ' . $_GET['name'];
        $name = mysqli_real_escape_string($conn, $_POST['name']);

        $query = "INSERT INTO users(name) VALUES('$name')";

        if(mysqli_query($conn, $query)){
                echo "User Added ....";
        }else{
                echo "Error :" . mysqli_error($conn);
        }
}

//  Check for POST variable
if(isset($_POST['name'])){
        echo 'POST: Your name is ' . $_POST['name'];
}


?>