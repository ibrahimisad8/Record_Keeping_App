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
<?php include ('includes/side_bar_navigation.php');?>

<!-- start of the content wrapper -->
  <div class="content-wrapper">
    <div style="text-align:left; margin-top:55px; font-size:25px; font-weight:100">
      Today's Opening balance
      <hr class="colorgraph"> <br />

      <fieldset>

        <form >
          <div class="row">
            <!--<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
            </div><br />  <div class="col-xs-3" class="input-group">
            class="form-inline"
          -->
            <div class="col-xs-10" class="input-group">
              <div class="input-group-addon">$USD
              <input type="text" class="form-control" id="USDAmount" placeholder="Amount"></div>

              <div class="input-group-addon">DJF
              <input type="text" class="form-control" id="DJFAmount" placeholder="Amount"></div>
            </div>
          </div> <br />

          <!-- From the chief cashier to the Tellers -->
          <div class="row">
            <div class="col-xs-10" class="input-group">
              <div class="input-group-addon">From
                <input class="form-control" id="disabledInput" type="text"
                placeholder="<?php if($_SESSION['userid']) echo "".$_SESSION['userid']."";?>" disabled>
              </div>

              <!-- Tellers' usernames -->

              <div class="input-group-addon">To
                <select class="form-control">
                  <option value="">Select Tellers UserID</option>
                  <option value="">AV26ANAB</option>
                  <option value="">DJAMARKAG</option>
                  <option value="">DJBIDIRIS</option>
                  <option value="">DJBUSER33</option>
                  <option value="">DJMUNIN</option>
                  <option value="">DJUSER1</option>
                  <option value="">DJUSER2</option>
                  <option value="">DJUSER3</option>
                  <option value="">DJUSER4</option>
                  <option value="">DJUSER13</option>
                  <option value="">DJUSER15</option>
                  <option value="">DJUSER19</option>
                  <option value="">DJUSER20</option>
                  <option value="">DJUSER22</option>
                  <option value="">DJUSER24</option>
                  <option value="">DJUSER25</option>
                  <option value="">DJUSER26</option>
                  <option value="">DJUSER27</option>
                  <option value="">DJUSER28</option>
                  <option value="">DJUSER31</option>
                  <option value="">DJUSER34</option>
                  <option value="">SBXUSER2</option>
                  <option value="">SBXUSER3</option>
                </select>
              </div>

            </div>
          </div> <br />
          <button type="submit" class="btn btn-lg btn-success">Send Balance</button>
        </form>
      </fieldset>

    </div> <br />

    <div div style="text-align:left; margin-top:55px; font-size:25px; font-weight:100">
      Previous Opening balances
      <hr class="colorgraph"> <br />

      <!-- <h3>Please choose a date!</h3>
      This is where you choose the date.-->

      <?php include ('includes/datepicker.html'); ?>

        <!--
        <script text="text/javascript" src="js/jquery.js"></script>
      	<script text="text/javascript" src="js/jquery-ui.js"></script>
        <script text="text/javascript" src="js/ui.js"></script>
        -->

        <!-- This is the end of the datetimepicker.-->
    </div>
  </div>
<!-- .content-wrapper -->
<!-- This is the end of the main side bar navigation -->
</main> <!-- .cd-main-content -->

<?php include ('includes/footer.php'); ?>
