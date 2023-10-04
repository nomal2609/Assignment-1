<?php

//Database Connectivity
    $servername="localhost";
    $username="root";
    $password="Nomal@260904";
    $database="Nomi";

    //creating a connection

    $conn=mysqli_connect($servername, $username, $password, $database);
   
    //die if connection failed
    if(!$conn)
    {
        die("Sorry, connection failed!!".mysqli_connect_error());
    }
    else
    {
        echo "Connection Successful";
    }

    $sql="SELECT * from feedback";
    $result=mysqli_query($conn,$sql);


    //find number of records
    $num=mysqli_num_rows($result);
    // Retrieve data from the table
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Display data
        echo "First Name: " . $row["fname"] . "<br>";
        echo "Last Name: " . $row["lname"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        // Add more fields as needed
        echo "<br>";
    }
} else {
    echo "No data found.";
}
?>