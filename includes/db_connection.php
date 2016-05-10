<?php
/**
 * These are the database login details
  */  
define("DB_SERVER", "localhost");     // The host you want to connect to.
define("DB_USER", "turbopup_admin");    // The database username. 
define("DB_PASS", "turbopup");    // The database password. 
define("DB_NAME", "turbopup_login");    // The database name.
 
define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");

define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Test if connection succeeded
if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
          mysqli_connect_error() . 
              " (" . mysqli_connect_errno() . ")"
                );
} else{
}

 
?>
