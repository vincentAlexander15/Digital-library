<?php
  session_start();
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>BOOFLIX</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><strong>BOOKFLIX</strong></a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="browse.php">Browse</a>
						<a href="list.php">List</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to the Library</h1>
					</header>

					<div class="flex ">

						<div>
							<h3>Easy</h3>
							<p>For anyone to use</p>
						</div>

						<div>
							<h3>Accessible</h3>
							<p>Available anywhere</p>
						</div>

						<div>
							<h3>Free</h3>
							<p>No payment necessary</p>
						</div>

					</div>

					<footer>
						<a href="#" class="button">Get Started</a>
					</footer>
				</div>
			</section>


		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<div class="flex flex-2">
						<article>
							<div class="image round">
								<img src="images/pic01.jpg" alt="Pic 01" />
							</div>
							<header>
								<h3>Corona<br /> Public Library</h3>
							</header>
							<p>Located at 650 S Main St, Corona, CA 92882</p>
							<footer>
								<a href="#" class="button">Learn More</a>
							</footer>
						</article>
						<article>
							<div class="image round">
								<img src="images/pic02.jpg" alt="Pic 02" />
							</div>
							<header>
								<h3>Riverside<br /> Public Library</h3>
							</header>
							<p>Located at 6927 Magnolia Ave</p>
							<footer>
								<a href="#" class="button">Learn More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

			<!--		<h3>Get in touch</h3>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div> -->
          <div class = "header-login">
            <?php
            if (isset($_SESSION['userId'])) {
              echo     '  <form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit" style="background-color:white">Logout</button>
                </form>';
            }
            else{
              echo '<p><i> Already a member? Login below! </i><p>';
              echo     '  <form action="includes/login.inc.php" method="post">
                  <input type="text" name="mailuid" placeholder="Username/E-mail...">
                  <input type="password" name="pwd" placeholder="Password...">
                  <button type="submit" name="login-submit" style="background-color:white">Login</button>
                </form>
                  <a href="signup.php" class="header-signup" style="background-color:white">Signup</a>';
            }
           ?>
          </div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
