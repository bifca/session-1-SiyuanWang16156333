<!DOCTYPE html>
<div class="navigation">
 <div class="logo">
  <a href="index.php"><img src="images/7.png"></a>
 </div>


 <div class="humber" toggle="0" id="humber">
  <div class="line"></div>
  <div class="line"></div>
  <div class="line"></div>
 </div>
</div>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Red Velvet</title><meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css.css" rel="stylesheet">
</head>

<?php
require 'var.php';
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }

   $sql = "SELECT picture,name,birthday,introduction FROM `red` WHERE pictureID = $id";
   $sql2 = "SELECT * FROM `red`";
   $result = mysqli_query($conn, $sql);
   $result2 = mysqli_query($conn, $sql2);

   if (mysqli_num_rows($result) > 0) {
       while($row = mysqli_fetch_assoc($result)) {
         echo '<div style="position: relative;left: 250px;padding-top: 45px;">';
         echo '<img src="'.$row["picture"].'"/>';
         echo "</div>";
         echo '<br/>';
         echo '<div style="position: relative;left: 350px;padding-top:40px;font-weight:bold">';
         echo '<div>'.$row["birthday"].'</div>';
         echo "</div>";
         echo '<br/>';
         echo '<div class="text">'.$row["name"].'</div>';//Selects the information from the title bar i.e. Portfolio.php?id=1 or ?id=100. This will make the varable $id = to the value id=
      };
   } else {
       echo "0 results";
   }
   echo "<div style='text-align:center;'>";
   echo "<div style=' width:22%; display: inline-block; font-size: 20px; font-weight: bold;'>";
     if ($id != 1) {
       echo '<a href="'.$prevURL.'" style="margin-right:20px;color:#818181;">Prev</a>';
     }
     if (mysqli_num_rows($result2) != $id) {
       echo '<a href="'.$nextURL.'" style="color:#818181;">next</a>';
     }
   echo "</div>";


   mysqli_close($conn);
   echo "<br><br>";
   ?>
</html>
