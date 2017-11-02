
<?php include "config.php"; ?>
<?php 

$conn = mysqli_connect($db_server, $db_uname, $db_pw, $db_dbname);

// Check connection
if (!$conn) {
    
    //if no connection
    $err = "Connection failed: " . mysqli_connect_error();
}

?>