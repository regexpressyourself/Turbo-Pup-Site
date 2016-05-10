<?php include("includes/session.php");?>
<?php include("includes/functions.php");?>
<?php include("includes/validation_functions.php");?>
<?php require_once("includes/db_connection.php");?>

<?php
$username = "";
if (isset($_POST['username'])) {


  // validation
  $required_fields = array("username", "password");
  validate_presences($required_fields);


  if (empty($errors)) {

    $username = ($_POST["username"]);
    $password = ($_POST["password"]);

    $found_admin = attempt_login($username, $password);
  }

  if ($found_admin) {
    // Success
    $_SESSION["admin_id"] = $found_admin["id"];
    $_SESSION["username"] = $found_admin["username"];

    redirect_to("vault.php");
  } else {
    // Failure
    $_SESSION["message"] = "Username/password not found.";
  }



} else {
  $_SESSION["message"] = "No Post SubmitteD";
}
?>
<div>
  <?php echo message(); ?>
</div>
