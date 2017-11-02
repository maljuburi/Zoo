<?php
$msg = "";
$err = "";
?>


<?php include "header.php"; ?>



<?php include "php/conn.php";?>

<?php

if(isset($_GET["submitadd"])){
    $name = $_GET["name"];
    $dob = $_GET["dob"];
    $type = $_GET["type"];
    $gender = $_GET["gender"];

    if($conn){
        $sql = "INSERT INTO zoo (name, dob, type, gender) VALUES ('$name', '$dob', '$type', '$gender')";
        

        if(mysqli_query($conn,$sql)){
            
            $msg = "Animal ".$name." type of ".$type." is Added!";
        }else{
            $msg = "Error: Animal was not added";
        }
    
    }
}


?>



<section>
    <div class="container">
        <form class="add-form" action="view.php">
                <p>Name:</p>
                <input type="text" name="name" placeholder="Name of Animal" required><br><br>
                <p> Date of Birth:</p>
                <input type="date" max="2017-11-02"  name="dob" required><br><br>
                <p>Type:</p>
                <select name="type" required>
                    <option value="">Select</option>
                    <option value="Amphibians">Amphibians</option>
                    <option value="Birds">Birds</option>
                    <option value="Fish">Fish</option>
                    <option value="Invertebrates">Invertebrates</option>
                    <option value="Mammals">Mammals</option>
                    <option value="Reptiles">Reptiles</option>
                </select><br><br>
                <p>Gender:</p>
                <p>
                    <input type="radio" name="gender" value="Male" id="male" required><label for="male">Male</label>
                    <input type="radio" name="gender" value="Female" id="female"><label for="female">Female</label>
                    <input type="radio" name="gender" value="Unknown" id="unknown"><label for="unknown">Unknown</label>
                </p><br><br>

                <input type="submit" name="submitadd" value="Add">
            </p>
        </form>
    </div>
</section>

<section>
    <div class="container">
        <div id="err" class="red center">
            <?php echo $err; ?>
        </div>
        <div id="msg" class="center bold">
            <?php echo $msg; ?>
        </div>
    </div>
</section>



<div class="tiger">
    <img src="img/tiger2.webp" alt="tigers image">
</div>


<?php include "php/close.php"; ?>
<?php include "footer.php"; ?>