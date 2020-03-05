<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "redv";

  $conn = mysqli($servername, $username, $password, $dbname);

   if (!$conn->connection_error){
       die("<strong>Connection Failed: </strong><br>". $conn->connect_error);
   }
   else{
       echo "Datebase connected successfully.<br></br>";
   }


   $query = "SELECT * FROM red";

   $result = mysqli_query($conn, $query);

   printf("<br>The query '$query'returned %d rows. \n", $result->num_rows);
   echo "</br></br></br></br>";

   if (mysqli_num_rows($result) > 0){
     echo "<div class='container'><h2>redv</h2><div class='row'>";
     $count = 0;
     while($row = mysqli_fetch_assoc($result)){
       $count = $count + 2;
       echo '<div class="col-12 col-sm-6 col-md-4 col-lg-2">';
       echo "<img class='icon' src='".$row['picture']."' alt='icon'><h3>".$row["name"]."</h3><p>".$row["introduction"]."</p>";
       echo "</div>"
       if($count == 12){
      echo "</div><div class = 'row'>";
      $count = 0;
     }
           }
    echo "</div>";
   }
   ?>
