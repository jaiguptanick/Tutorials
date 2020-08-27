<?php
echo "This is my first database connection to Mysql and then creating a new database using PHP commands!!!<br>";

/*connecting to Database(mysql)*/
$servername="localhost";
$uname="root";
$pass="";
   

//creating a connection
$connecting=mysqli_connect($servername,$uname,$pass);

//die if connection is not successfull
if (!$connecting){
	die("sorry we failed to connect:-". mysqli_connect_error());
}
else  {
	echo "<b> Successfully Connected :)</b><br>";
}




//creating a database

$sql_command="CREATE DATABASE Mynewdtabase1";
$result = mysqli_query($connecting, $sql_command);

//checking if db craeted successfully
if (!$result) {
	echo "Connection error------>>>>".mysqli_error($connecting);
}
else{
	echo "Successfully Created database";
}

?>
