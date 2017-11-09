


<?php include "header.php"; ?>





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
        
        <div class="tiger">
            <img src="img/tiger2.webp" alt="tigers image">
        </div>
    </div>
</section>







<?php include "footer.php"; ?>