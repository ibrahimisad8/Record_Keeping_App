<?php
include ('includes/init.php');

if ($_SESSION['userid'] == '') {
  header('Location: index.php');
  exit();
}

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title>AKIHA TECH SOLUTIONS | ACCOUNTING SOFTWARE</title>
</head>
<body>
	<header class="cd-main-header">
		<a href="Welcome.php" class="cd-logo"><img src="image/cd-logo.svg" alt="Logo"></a>


		<div class="cd-search is-hidden">

      <h2>Welcome To the AKIHA ACCOUNTING SOFTWARE!</h2>

      <!--
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form> cd-search -->
		</div>

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="#0">Tour</a></li>
				<li><a href="#0">Support</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="image/cd-avatar.png" alt="avatar">
						<?php
            if($_SESSION['userid'])
              echo "WELCOME, ".$_SESSION['userid']."!</b>";
            else
              header('Location: index.php');
            ?>
					</a>

					<ul>

						<li><a href="#0">My Account</a></li>
						<li><a href="#0">Something</a></li>
						<li><a href="includes/Logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">DASHBOARD</li>
				<li class="has-children overview">
					<a href="#0">Reports</a>
					<ul>
						<li><a href="#0">Overall</a></li>
						<li><a href="#0">Stamps</a></li>
						<li><a href="#0">Cheques</a></li>
            <li><a href="#0">Refunds</a></li>
            <li><a href="#0">Loan</a></li>
            <li><a href="#0">Expenses</a></li>
					</ul>
				</li>
				<li class="has-children notifications">
					<a href="#0">Notifications<span class="count">3</span></a>

					<ul>
						<li><a href="#0">All Notifications</a></li>
						<li><a href="#0">Tellers</a></li>
						<li><a href="#0">Chief Cashiers</a></li>
					</ul>
				</li>

				<li class="has-children comments">
					<a href="#0">Comments</a>

					<ul>
						<li><a href="#0">All Comments</a></li>
						<li><a href="#0">Edit Comment</a></li>
						<li><a href="#0">Delete Comment</a></li>
					</ul>
				</li>
			</ul>

			<ul>
				<li class="cd-label">CASH IN</li>
				<li class="has-children bookmarks">
					<a href="remittance.php">Remittance</a>
          <!-- Under Remittance
					<ul>
						<li><a href="#0">All Bookmarks</a></li>
						<li><a href="#0">Edit Bookmark</a></li>
						<li><a href="#0">Import Bookmark</a></li>
					</ul> -->

				</li>
        <li> <a href="#0">Cheques</a> </li>
				<li class="has-children images">
					<a href="#0">Stamps</a>
          <!--
					<ul>
						<li><a href="#0">All Images</a></li>
						<li><a href="#0">Edit Image</a></li>
					</ul>-->
				</li>
			</ul>

      <ul>
        <li class="cd-label">CASH OUT</li>
        <li class="has-children bookmarks">
          <a href="#0">Payments</a>
        </li>
        <li>
          <a href="#0">Refunds</a>
        </li>

        <li>
          <a href="#0">Loans</a>
        </li>

        <li>
          <a href="#0">Expenses</a>
        </li>
      </ul>

    			<ul>
    				<li class="cd-label">Action</li>
            <li></li>
    				<li class="action-btn"><a href="#0">+ USERS</a></li>
    			</ul>


		</nav>

		<div class="content-wrapper">

			<h1>This is the Remittance page!!!</h1>

		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
