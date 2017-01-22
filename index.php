<?php //start php tag
include ('includes/init.php');

//first we check if the user is already loggedin
if (isset($_SESSION['userid']) && $_SESSION['userid']!='') {
	header('Location: Welcome.php');   	//if they are loggedin redirect them to another page.
	exit();
	//echo "you are already loggedin";
}

//if submit is not blanked i.e. it is clicked.
if (isset($_POST['Submit'])) //here give the name of your button on which you would like    //to perform action.
{
	$error = array();   // create the array error here

// here check the both submitted text boxes for null value by giving there name.
	if(empty($_POST['userid']) || empty($_POST['password']))
	{
		$error[] = "Please type in your UserID and Password!";
	}else {
		$username = mysql_real_escape_string(stripcslashes(trim($_POST['userid'])));
		$password = mysql_real_escape_string(stripcslashes(trim($_POST['password'])));
	}

	if (empty($error)) {
		//session_start();
	  $sql = "select * from users where username = '$username' &&  password = '$password'";
	  $result = mysql_query($sql)
	    or exit("Sql Error!".mysql_error());
		$rows = mysql_fetch_array($result);
	  $num_rows = mysql_num_rows($result);
	  if($num_rows > 0)
	   {
//here you can redirect on your file which you want to show after login just change filename, give it to your filename.
			while ($rows) {
				$_SESSION['userid'] = $rows['username'];
				header("Location: Welcome.php");
				exit();
			}

			 //OR just simply print a message.
				//echo "You have logged in successfully";
			}else {
				$error_message = '<span class="error" style="color:#D00000">UserID or Password is incorrect! Please try again.</span><br /><br />';
			}
	}else {

		$error_message = '<span class="error" style="color:#D00000">';
		foreach ($error as $key => $value) {
			$error_message.="$value";
		}
		$error_message.='</span><br/><br/>';
	}
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>PHP Login Form</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="includes/css/bootstrap.css">
<link rel="stylesheet" href="includes/css/main.css">
</head>
<!-- NAVBAR
================================================== -->

<body>

<div class="container"> <br>
  <div> <center><img src="image/logo.png" alt="AKIHA_TECH Logo" /></center> </div>
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form name="form_login" method="post" action="index.php" role="form">
        <fieldset>
          <h2><center>Please Sign In</center></h2><br />
          <center><?php echo $error_message;?></center>
          <hr class="colorgraph">
          <div class="form-group">
            <input name="userid" type="text" id="userid" class="form-control input-lg" placeholder="UserID">
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
          </div>
          <span class="button-checkbox">
          <button type="button" class="btn" data-color="info">Remember Me</button><!-- Additional Option -->
          <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="Submit" value="Login" class="btn btn-lg btn-success btn-block">
            </div>
          <!--  <div class="col-xs-6 col-sm-6 col-md-6"> <a href="http://creativealive.com/basic-registration-form-php-mysql-database-connectivity/" target="_blank" class="btn btn-lg btn-primary btn-block">Register<small>- Read Article</small></a> </div>-->
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>

</body>
</html>
