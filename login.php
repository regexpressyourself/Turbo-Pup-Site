<?php include("includes/session.php");?>
<?php include("includes/functions.php");?>
<?php include("includes/validation_functions.php");?>
<?php require_once("includes/db_connection.php");?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/musicnote.ico" />
    <title>Turbo Pup's Home Planet</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>

        <!-- jQuery -->



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="login bg-darkest-gray">
<div class="login-error">
  <?php echo message(); ?>
</div>
<div class="vault-login container">

<form name="vaultLogin" id="vaultLogin" action="checklogin.php" method="post" >
    <div class="row">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name Tag *" id="username" name="username" required data-validation-required-message="Please enter your name tag.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Combination *" id="password" name="password" required data-validation-required-message="Please enter your combination.">
                <p class="help-block text-danger"></p>
            </div>
        <div class="clearfix"></div>
            <div id="success"></div>
        <div class="text-center">
          <button name="submit" type="submit" value="Submit" form="vaultLogin" class="btn btn-xl">Open Vault</button>

        </div>

    </div>
  </form>

  <div class="text-center">
    <a href="#question-modal" data-toggle="modal"><i class="glyphicon glyphicon-question-sign"></i></a>
  </div>

</div>

<!-- Modal -->
<div id="question-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">So what's the vault?</h4>
      </div>
      <div class="modal-body">
        <p>The vault is where we hide the really good stuff. You can get your own name tag and combination at any of our live shows.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>
