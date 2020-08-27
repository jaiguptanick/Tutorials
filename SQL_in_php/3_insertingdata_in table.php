<?php
echo "Inserting data in table in database using PHP commands!!!<br>";

/*connecting to Database(mysql)*/
$servername="localhost";
$uname="root";
$pass="";
$database="mynewdtabase1";  //we have defined preexisting db which we will deal with

//creating a connection
$connecting=mysqli_connect($servername,$uname,$pass,$database);

//die if connection is not successfull
if (!$connecting){
	die("sorry we failed to connect:-". mysqli_connect_error());
}
else  {
	echo "<b> Successfully Connected :)</b><br>";
}


//variables to be inserted in family table in mynewdtabase1
$Name="ramuu";
$age=58;
$dob='2050-10-12';
//Inserting data in table in database

//method1----$sql_command="INSERT INTO `family` (`name`, `age`, `D.O.B`) VALUES ('jai', '12', '2020-04-05');";
$sql_command="INSERT INTO `family` (`name`, `age`, `D.O.B`) VALUES ('$Name', '$age', '$dob');";
//Inserting data using variables in family in mynewdtabase1 and this command i have copied from console in mysql application.
$result = mysqli_query($connecting, $sql_command);


//checking if successfully added data in family table in db
if (!$result) {
	echo "Connection error------>>>>".mysqli_error($connecting);
}
else{
	echo "Successfully inserted data in table in DB";
}

?>
