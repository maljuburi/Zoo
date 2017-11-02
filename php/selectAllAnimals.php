<?php

include "conn.php";
include_once "animClass.php";

if ($conn) {
   
    $sql = "SELECT * from zoo";
    $result = mysqli_query($conn, $sql);
    echo $result;
    if (mysqli_num_rows($result) > 0) {
        $animals=[];
        while($row = mysqli_fetch_assoc($result)) {
            array_push($animals, new Animals($row["anid"],$row["name"], $row["dob"], $row["type"], $row["gender"]));
        }
    }else{
        $message="No results returned.";
    }
}



include "close.php";

?>