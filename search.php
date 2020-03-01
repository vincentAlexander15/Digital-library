<?php
  include 'browseHeader.php'
?>
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
<h1><big>Search Page</big></h1>

<div class="books-container">
<?php
if (isset($_POST['submit-search'])) {
  $search = mysqli_real_escape_string($conn, $_POST['search']);
  $sql = "SELECT * FROM books WHERE b_title LIKE '%$search%' or b_genre LIKE '%$search%'
    OR b_author LIKE '%$search%'";
  $result = mysqli_query($conn, $sql);
  $queryResult = mysqli_num_rows($result);

  echo $queryResult." results";
  $availability;
  if ($queryResult > 0) {
    while ($row = mysqli_fetch_assoc($result)){
      if ($row['b_availability'] > 0) {
        $availability = "Available";
      } else {
        $availability = "Not available";
      }
      echo "<div class='book-box'>
        <h3>".$row['b_title']."</h3>
        <p>Author: ".$row['b_author']."</p>
        <p>Genre: ".$row['b_genre']."</p>
        <p>Availablity: ".$availability."</p>
      </div>";
      if($availability > 0){
      echo "Unable to reserve at this moment";
    } else {
      echo '<form action="reserve.php" method="post">   <input type="text" name="title" placeholder="Type book title">
        <input type="text" name="author" placeholder="Type book author">
        <input type="text" name="genre" placeholder=" Type genre"> <button type="reserve-submit" name="reserve-book">Add to List</button> </form>';
    }
    }
  } else {
    echo " There are no results matching your search";
  }

}

?>
</div>
