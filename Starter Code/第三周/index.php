<!DOCTYPE html>
<html>
<head>
<title>Weather</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
.dropbtn {
    background-color: #c38ab7;
    color: #fff;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.button {
    background-color: #c38ab7;
    color: #fff;
    border: none;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  	padding-left: 10px;
  	padding-right: 10px;
  	border-radius:3px;
  	font-weight: bold;
}

</style>
</head>
<body>

<h2>weather</h2>

<form class="form-inline" role="form" action="weather.php" method="get">
<select class="dropbtn" name="cityname">
      <option value="Wuhan" selected>Wuhan</option>
      <option value="Shanghai">Shanghai</option>
      <option value="Beijing">Beijing</option>
      <option value="Tokyo">Tokyo</option>
      <option value="London">London</option>
      <option value="Birmingham">Birmingham</option>
      <option value="New York">New York</option>
      <option value="Los Angeles">Los Angeles</option>
      <option value="Sydney">Sydney</option>
  </select>
  <button class="button" type="submit">Search</button>
</form>

</body>
</html>
