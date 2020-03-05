<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link href="css/style.css" rel="stylesheet" type="text/css">
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Red Velvet</title>
</head>
<body>
<?php
   $servername = "localhost";
   $username   = "root";
   $password   = "";
   $dbname     = "redv";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    	die("<strong>Connection Failed: </strong><br>" . $conn->connect_error);
	}

      $query = "SELECT * FROM red";

      $result = mysqli_query($conn, $query);

      if(mysqli_num_rows($result)>0){
		  echo "<div class='container'><h1>Red Velvet</h1><div class='row'>";
		$count = 0;
		  while($row = mysqli_fetch_assoc($result)){
			  $count = $count + 2;
        echo "<div class='col-xs-12 col-sm-6 col-lg-4'>";
 			  echo "<img src='".$row["picture"]."'width = '150px'alt=''><h3>".$row["name"]."</h3><p>".$row["introduction"]."</p>";
			  echo "</div>";
			  if($count == 12){
				  echo "</div><div class = 'row'>";
				  $count = 0;
			  }
           }
		  echo "</div>";
      }
?>
</body>
</html>
