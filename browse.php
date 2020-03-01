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
<br></br>
<form action="search.php" method="POST">
  <input type="text" name="search" placeholder="Search">
  <button type="submit" name="submit-search">Search</button>
</form>

<h2><big>All Books<big></h2>
<hr/>
<div class="books-container">
  <?php
    $sql = "SELECT * FROM books";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        if ($row['b_availability'] > 0) {
          $availability = "Available";
        } else {
          $availability = "Not available";
        }
        echo "<div>
          <h3>".$row['b_title']."</h3>
          <p>Author: ".$row['b_author']."</p>
          <p>Genre: ".$row['b_genre']."</p>
          <p>Available: ".$row['b_availability']."</p>
        </div>";
        if($availability > 0){
        echo "Unable to reserve at this moment";
      } else {

        echo '<form action="reserve.php" method="post"> <button type="submit" name="reserve-book">Add to List</button> </form>
        <hr/>';
      }
      }
    }
   ?>
</div>

</body>
</html>
