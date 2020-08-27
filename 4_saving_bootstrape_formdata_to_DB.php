<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>ContactUs-Save your data in DB</title>
  </head>
  <body>
				      <!-- navigation bar -->
						<nav class="navbar navbar-expand navbar-light bg-primary">
						  <a class="navbar-brand" href="#">Navbar</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse" id="navbarNav">
						    <ul class="navbar-nav">
						      <li class="nav-item active">
						        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Features</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Pricing</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						      </li>
						    </ul>
						  </div>
						</nav>



<!-- php script-->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];

        /*connecting to Database(mysql)*/
		$servername="localhost";
		$uname="root";
		$pass="";
		$database="mynewdtabase1";

		//creating a connection
		$connecting=mysqli_connect($servername,$uname,$pass,$database);

		//die if failed to connect
		if (!$connecting) {
			die("failed to connect to database".mysqli_connect_error());}
		else
		 // Submit these to a database
         // Sql query to be executed 
				$sql_command="INSERT INTO `form_data` (`name`, `email`, `description`, `dateandtime`) VALUES ('$name', '$email', '$desc', current_timestamp());";
				$result = mysqli_query($connecting, $sql_command);


				//checking if successfully added data in form_data table in db
				if ($result) {
					//echo "Connection error------>>>>".mysqli_error($connecting);
					echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Success</strong> Your Query has been submitted to DB.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						   </div>';
				}
				else{
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						  <strong>Failed!</strong> Your Query not submitted due to db error.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>';
				}

}
?>
					    <!--form -->
					    <div class="container mt-3" >
					    			<h2>CONTACT US FOR YOUR CONCERN</h2>

							    	<form action="/ps_tut/4_saving_bootstrape_formdata_to_DB.php" method="POST" >
							  <div class="form-group">
							    <label for="name">Name</label>
							    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
							  </div>
							 <div class="form-group">
							    <label for="email">Email address</label>
							    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
							  </div>
							  <div class="form-group">
							    <label for="desc">Description</label>
						        <textarea class="form-control" name="desc" id="desc" cols="10" rows="4"></textarea> 
							  </div>
							  <button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>