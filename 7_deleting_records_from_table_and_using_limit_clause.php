<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "mynewdtabase1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


$sql = "DELETE FROM `family` WHERE `age` = '55' LIMIT 5";//if there are many entries with age 55 then LIMIT will delete first 5 only 
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result){
    echo "Delete successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error --> $err";
}

?>