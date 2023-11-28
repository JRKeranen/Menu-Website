<!DOCTYPE html>
<html>
  <style>
    body {
	background-color: #b4b4b4;
    }
    
    img {
        width: 100%;
        height: 100%;
        object-fit: contains;
    }
    .img {
        width: 100%;
        height: 250px;
        text-align: center;
    }
    div {
        text-align:center;
    }
    h1 {
        text-align:center;
    }
    p {
        text-align:center;
    }
  </style>


  <body>

<h1>My Breakfast page</h1>

<?php

$mysqli = new mysqli("localhost", "root", "Pa55word", "MENU");

$dinnerQuery = mysqli_query($mysqli, 'SELECT * FROM Food WHERE BorD = "B";');

$result = mysqli_query($mysqli, 'SELECT * FROM Food;');

//echo mysqli_num_rows($dinnerQuery);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if ($dinnerQuery->num_rows > 0) {

  while($row = $dinnerQuery->fetch_assoc()) {
echo "<h1>".$row["Name"]."</h1>";
echo "<div class = 'img'><img src=".$row['ImgPath']."></div>";
echo "<p>".$row["Description"]."</p><br>";
  }
} else {
  echo "0 results";
}
?>

<a href = "index.php"><h1>Home</h1></a>
</body>
</html>
