<?php 
include "conn.php";
include_once "animClass.php";

if ($conn) {
    //if connection is good
    $where = "";

    if($criteria == "name"){
        $where = "where name = '$value'";
    }elseif ($criteria == "type") {
        $where = "where type = '$value'";
    }elseif ($criteria == "gender") {
        $where = "where gender = '$value'";
    }

    $sql = "SELECT * from zoo ".$where;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $animals=[];
        while($row = mysqli_fetch_assoc($result)) {
            array_push($animals, new Animals($row["anid"],$row["name"], $row["dob"], $row["type"], $row["gender"]));
        }
    }else{
        $message="No results returned.";
    }
}





include "close.php"

?>