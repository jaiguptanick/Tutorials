<?php
echo "Displaying data in browser form table in database using PHP commands!!!<br>";

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


$sql_command="SELECT * FROM `family`;";
//query to select all data from the table family and then we can perform further actions.
$result = mysqli_query($connecting, $sql_command);

//count the no. of rows in the selected table (family) of the DB.
$num = mysqli_num_rows($result);
echo $num." rows found in database"."<br>";

//display no of rows if there are rows means num>0
if ($num>0) {
	// $row = mysqli_fetch_assoc($result); //point to be noted is mysqli_fetch_assoc() return data one by one so we need to run loop till it return NULL.
	// //echo $row; >>>this will return only type of variable 'row' is means display only word 'Array'
	// echo var_dump($row);	//The var_dump() function dumps information about one or more variables which holds type and value of the variable(s).
	// output is array(4) { ["S.NO"]=> string(1) "1" ["name"]=> string(3) "jai" ["age"]=> string(2) "12" ["D.O.B"]=> string(10) "2020-04-05" } 

	//NOW TO FEATCH ALL DATA OF ROWS AT ONCE.
	while ($row=mysqli_fetch_assoc($result)) {
		#means will run till $row=NULL(means till row finishes)
		//echo var_dump($row)
		echo $row['S.NO']. ". Hello ". $row['name']. " .Your age is ". $row['age']. " and your Date of birth is ". $row['D.O.B']. "<br>";
	}


}




?>