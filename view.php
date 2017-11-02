<?php include ("header.php") ?>

<?php  ?>

<?php
if (!isset($_GET["submitsearch"])){
    include_once "php/selectAllAnimals.php";
}else{

    $criteria = $_GET["criteria"];
    $value = $_GET["value"];
    include_once "php/selectAnimalByCrit.php";
}

?>
<br>
<section>
    <div class="container">
        
        <form class="view-form" method="get">
            <p>Search by:</p>
            <p>
                <select name="criteria" required>
                    <option value="">Choose...</option>
                    <option value="name">Name</option>
                    <option value="gender">Gender</option>
                    <option value="type">Type</option>
                </select>
            </p>

            <input type="text" name="value" placeholder="Enter Search Text ..." required>
            <p class="center">
                <input type="submit" value="Search" name="submitsearch">
            </p>

        </form>
        
        
        
        <table id="tblList">
            <tr>
                <th>Animal ID</th>
                <th>Animal Name</th>
                <th>Date Of Birth</th>
                <th>Type</th>
                <th>Gender</th>
            </tr>
            <?php
            if (count($animals)==0){
            ?>
            <tr>
                <td colspan="5">
                    <p class="center bold">No Animals to display</p>
                </td>
            </tr>
            <?php
            }else{
                for ($i=0;$i<count($animals);$i++){
                    echo "<tr>";
                    echo "<td>";
                    echo $animals[$i]->GetId();
                    echo "</td>";
                    echo "<td>";
                    echo $animals[$i]->GetName();
                    echo "</td>";
                    echo "<td>";
                    echo $animals[$i]->GetDob();
                    echo "</td>";
                    echo "<td>";
                    echo $animals[$i]->GetType();
                    echo "</td>";
                    echo "<td>";
                    echo $animals[$i]->GetGender();
                    echo "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</section>


<div id="divError"><?php echo $error; ?></div>
<?php include "footer.php"; ?>