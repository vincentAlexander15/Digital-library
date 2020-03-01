<?php
if(isset($_POST['reserve-submit'])) {
  require 'dbh3.php';
  $title = $_POST['title'];
  $author = $_POST['author'];
  $genre = $_POST['genre'];
  $sql = "INSERT INTO reservedBooks (r_title, r_author, r_genre) VALUES (?, ?, ?)";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../browse.php?error=sqlerror");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "sss", $title, $author, $genre);
    mysqli_stmt_execute($stmt);
    header("Location: ../search.php?reserve=success");
    exit();
  }




  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}  else {
    header("Location: ../browse.php");
    exit();
}
