<?php
  include 'dbh3.php';
 ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>BOOFLIX</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="main.css" />
</head>

<body style = "background-color: #fff8e7;">
<header id="header">
  <div class="inner">
    <nav id="nav">
      <a href="index.php" style="color:black">Home</a>
      <a href="browse.php" style="color:black">Browse</a>
      <a href="list.php" style="color:black">List</a>
    </nav>
    <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
  </div>
</header>
<p>





</p>
<br></br>

<div class="reserved-container">
  <?php
    $sql = "SELECT * FROM reservedBooks";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        echo "<div>
          <h3>".$row['r_title']."</h3>
          <p>Author: ".$row['r_author']."</p>
          <p>Genre: ".$row['r_genre']."</p>
        </div>";
      }
    } else {
      echo " You have nothing reserved at this moment";
    }
   ?>
</div>

</body>
