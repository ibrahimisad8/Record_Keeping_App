<?php
include ('includes/init.php');

if ($_SESSION['userid'] == '') {
  header('Location: index.php');
  exit();
}
?>

<!-- This is to import the main header -->
<?php include ('includes/header.php');?>
<!-- This is the end of the import of the main header -->

<!-- This is to import the Main Side Bar Navigation -->
<?php include ('includes/side_bar_navigation.php'); ?>

<!-- start of the content wrapper -->
  <div class="content-wrapper">
      <h1 style="text-align:left">Chief Cashiers page</h1>
  </div>
<!-- .content-wrapper -->
<!-- This is the end of the main side bar navigation -->
</main> <!-- .cd-main-content -->

<?php include ('includes/footer.php'); ?>
