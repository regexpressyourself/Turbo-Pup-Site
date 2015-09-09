<?php $layout_context = "admin"; ?>

<?php include("includes/session.php");?>
<?php include("includes/functions.php");?>
<?php include("includes/validation_functions.php");?>
<?php require_once("includes/db_connection.php");?>

<?php
if (isset($_POST['submit'])) {

    // validation
    $required_fields = array("username", "password");
    validate_presences($required_fields);

    $fields_with_max_lengths = array("username" => 30);
    validate_max_lengths($fields_with_max_lengths);

    if (!empty($errors)) {
        $_SESSION["errors"] = $errors;
        redirect_to("new_admin.php");
    } 

    $username = mysql_prep($_POST["username"]);
    $password = password_encrypt($_POST["password"]);

    $query  = "INSERT INTO users (";
    $query .= "  username, hashed_password ";
    $query .= ") VALUES (";
    $query .= "  '{$username}', '{$password}'";
    $query .= ")";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Success
        $_SESSION["message"] = "Admin created.";
        redirect_to("manage_admins.php");
    } else {
        // Failure
        $_SESSION["message"] = "Admin creation failed.";
        redirect_to("new_admin.php");
    }



} else {
    redirect_to("new_admin.php");
}
?>


<?php if (isset($connection)) { mysqli_close($connection); } ?>

