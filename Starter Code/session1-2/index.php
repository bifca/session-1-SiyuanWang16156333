<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required mata tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!--Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Red Velvet</title>
</head>
<body>

<div class="container">
  <div class="row">
    <section>
    <img class="icon" src="images/7.jpg" alt="Icon" width="150px">
  </section>
  </div>

  <div class="row">
     <div class="col-12 col-sm-12 col-md-6 col-lg-4">
    <section>
      <img class="icon" src="images/1.JPG" alt="Icon" width="150px">
      <h3>Red Velvet</h3>
      <p>Red velvet is a women's singing group launched by South Korea SM Entertainment Co., Ltd. in August 2014.</p>
    </section>
    </div>

     <div class="col-12 col-sm-12 col-md-6 col-lg-4">
    <section>
      <img class="icon" src="images/2.JPG" alt="Icon" width="150px">
      <h3>Yeri</h3>
      <p>Selected as a trainee of SM company through South Korea's "S.M. casting system" draft.</p>
    </section>
  </div>


    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
    <section>
      <img class="icon" src="images/3.JPG" alt="Icon" width="150px">
      <h3>SeulGi</h3>
      <p>In 2007, Korean SM Entertainment Co., Ltd. was selected to become a trainee.</p>
    </section>
  </div>


     <div class="col-12 col-sm-12 col-md-6 col-lg-4">
    <section>
      <img class="icon" src="images/4.JPG" alt="Icon" width="150px">
      <h3>Irene</h3>
      <p>In 2009, the talent show of South Korea SM Entertainment Co., Ltd. was discovered and officially entered the company to become a trainee.</p>
    </section>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
    <section>
      <img class="icon" src="images/5.JPG" alt="Icon" width="150px">
      <h3>Joy</h3>
      <p>She was a member of the group who did not appear through SM rocks. She became an intern through the selection of SM Entertainment in Seoul in 2012.</p>
    </section>
  </div>


     <div class="col-12 col-sm-12 col-md-6 col-lg-4">
    <section>
      <img class="icon" src="images/6.JPG" alt="Icon" width="150px">
      <h3>Wendy</h3>
      <p>In 2012, she became a trainee of SM Entertainment in Canada.</p>
    </section>
    </div>
  </div><!-- row -->
</div><!-- content container -->


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
       echo "<img class='icon' src='".$row['icon']"'alt='icon'><h3>".$row["name"]."</h3><p>".$row["classfication"]."</p>";
       echo "</div>"
       if ($count == 12){
          echo "</div><div class='row'>";
          $count = 0
       }
     }
     echo "</div>"
   }
   ?>






<!--Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
