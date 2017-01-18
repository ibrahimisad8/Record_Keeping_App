
<?php
  include ('includes/header.php');
  if ($_SESSION['userid'] == '') {
    header('Location: index.php');
    exit();
  }
?>

<div class="welcome-content">
  <h1> This is the Welcome page!!! </h1>
</div>

<?php include ('includes/footer.php'); ?>
