<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset = "UTF-8" >
    <title> Bookflix </title>
   <link rel="stylesheet" href="main.css">
  </head>

  <body style = "background-color: #fff8e7;">
    <h1> BookFlix </h1>
    <p><i><h2> A digital library soruce that's free and easy to use! </h2></i></p>
    <hr/>
    <p> </p>


      <header>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="browse.php">Browse</a></li>
            <li><a href="#">List</a></li>
          </ul>
        </nav>
          <div class = "header-login">
            <?php
            if (isset($_SESSION['userId'])) {
              echo     '  <form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit">Logout</button>
                </form>';
            }
            else{
              echo '<p><i> Already a member? Login below! </i><p>';
              echo     '  <form action="includes/login.inc.php" method="post">
                  <input type="text" name="mailuid" placeholder="Username/E-mail...">
                  <input type="password" name="pwd" placeholder="Password...">
                  <button type="submit" name="login-submit">Login</button>
                </form>
                  <a href="signup.php" class="header-signup">Signup</a>';
            }
           ?>
          </div>
      </header>
