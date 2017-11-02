<?php include ("header.php") ?>

<?php include_once "php/selectAllAnimals.php"; ?>


<form method="get">
    <table id="animSearch">
        <tr>
            <td>Search by:</td>
            <td>Criteria:
                <select name="criteria" required>
                    <option value="">Choose...</option>
                    <option value="name">Name</option>
                    <option value="gender">Gender</option>
                    <option value="type">Type</option>
                </select>
            </td>
            <td>
                <input type="text" name="value" placeholder="Enter Search Text ..." required>
            </td>
            <td>
                <input type="submit" value="Search" name="submitsearch">
            </td>
        </tr>
    </table>
</form>



<table id="tblList">
    <tr>
        <th>Employee Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Department</th>
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

<div id="divError"><?php echo $error; ?></div>
<?php include "footer.php"; ?>