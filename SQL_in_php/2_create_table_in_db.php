<?php
echo "Creating table in database using PHP commands!!!<br>";

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




//creating a table in database

$sql_command="CREATE TABLE `family` ( `S.NO` INT NULL , `name` TEXT NOT NULL , `age` INT(2) NOT NULL , `D.O.B` DATE NOT NULL , PRIMARY KEY (`S.NO`));";//creating table of name family in mynewdtabase1 and this command i have copied from console in mysql application.
$result = mysqli_query($connecting, $sql_command);


//checking if successfully created table in db
if (!$result) {
	echo "Connection error------>>>>".mysqli_error($connecting);
}
else{
	echo "Successfully Created table in DB";
}

?>
