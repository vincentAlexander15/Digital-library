<?php
  require "index2.php";
?>
<p><i> Want to get started? Create an account! </i><p>
    <main>
      <div class ="wrapper-main">
        <section class="section-default">
          <h1>Signup</h1>
          <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
              echo '<p>Fill in all of the fields!</p>';
            }
            elseif ($_GET['error'] == "invaliduidmail") {
              echo '<p>Use a valid username and email address</p>';
            }
            elseif ($_GET['error'] == "invaliduid") {
              echo '<p>Invalid username</p>';
            }
            elseif ($_GET['error'] == "invalidmail") {
              echo '<p>Invalid email</p>';
            }
            elseif ($_GET['error'] == "passwordcheck") {
              echo '<p>Make sure your passwords match</p>';
            }
            elseif ($_GET['error'] == "usertaken") {
              echo '<p>Username is taken!</p>';
            }
          }
          elseif (isset($_GET['success'])) {
            echo '<p> Signup was a success! </p>';
          }
           ?>
          <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit" style="background-color:white">Signup</button>
          </form>
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>
