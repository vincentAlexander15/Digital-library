<?php
  include 'browseHeader.php'
?>
<header id="header">
  <div class="inner">
    <nav id="nav">
      <a href="index.php" style="color:black">Home</a>
      <a href="browse.php" style="color:black">Browse</a>
      <a href="#" style="color:black">List</a>
    </nav>
    <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
  </div>
</header>
<p>





</p>
<br></br>

<h2><big>Book Page<big></h2>
<hr/>
<div class="books-container">
  <?php
  $title = mysqli_real_escape_string($conn, $_GET['title']);
  $author = mysqli_real_escape_string($conn, $_GET['author']);
    $sql = "SELECT * FROM books WHERE b_title='$title' AND b_author='$author'";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
      while ($row = mysqli_fetch_assoc($result)){
        echo "<div>
          <h3>".$row['b_title']."</h3>
          <p>Author: ".$row['b_author']."</p>
          <p>Genre: ".$row['b_genre']."</p>
          <p>Available: ".$row['b_availability']."</p>
        </div>";
        echo '<form action="#" method="post"> <button type="submit" name="reserve-book">Add to List</button> </form>
        <hr/>';
      }
    }
   ?>
</div>

</body>
</html>
