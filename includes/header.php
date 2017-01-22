<!-- This is the main header -->
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css">  <!--CSS reset -->
	<link rel="stylesheet" href="css/style.css">  <!--Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title>AKIHA TECH SOLUTIONS | ACCOUNTING SOFTWARE</title>
</head>
<body>
	<header class="cd-main-header">
		<a href="Welcome.php" class="cd-logo"><img src="image/cd-logo.svg" alt="Logo"></a>

		<!--
		<div>

      <h2>Welcome To the AKIHA ACCOUNTING SOFTWARE!</h2>


			<form action="#0">
				<input type="search" placeholder="Search...">
			</form> cd-search
		</div>

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>
		-->
		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<!--
				<li><a href="#0">Tour</a></li>
				<li><a href="#0"></a></li>
				-->
				<li class="has-children account" style="font-size:15px">
					<a href="#0">
						<img src="image/cd-avatar.png" alt="avatar">
						<?php
	            if($_SESSION['userid'])
	              echo "WELCOME, ".$_SESSION['userid']."!</b>";
	            else
	              header('Location: ../index.php');
            ?>
					</a>

					<ul>
						<li><a href="my_account.php" style="font-size:15px">My Account</a></li>
						<li><a href="settings.php" style="font-size:15px">Settings</a></li>
						<li><a href="includes/Logout.php" style="font-size:15px">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->
