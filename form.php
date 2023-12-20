    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Industrial Training LogBook Form</title>
        <link rel="shortcut icon" type="x-icon" href="uitmlogo.png">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <script>
        function validateForm() {
            var name = document.forms["logBookForm"]["name"].value;
            var dob = document.forms["logBookForm"]["dob"].value;
            var utmId = document.forms["logBookForm"]["utmId"].value;
            var icNumber = document.forms["logBookForm"]["icNumber"].value;
            var course = document.forms["logBookForm"]["course"].value;
            var semester = document.forms["logBookForm"]["semester"].value;
            var year = document.forms["logBookForm"]["year"].value;
            var homeAddress = document.forms["logBookForm"]["homeAddress"].value;

            if (name === "" || dob === "" || utmId === "" || icNumber === "" || course === "" || semester === "" || year === "" || homeAddress === "") {
                alert("All fields must be filled out");
                return false;
            }


            if (utmId.length !== 10) {
                alert("UITM ID must have exactly 10 digits");
                return false;
            }
            if (icNumber.length !== 12) {
                alert("IC Number must have exactly 12 digits");
                return false;
            }
   

            return true;
        }
    </script>
    </head>
    <body>
    <div class="topnav">
  <a href="index.php">Home</a>
  <a class="active" href="form.php">Form</a>
  <a href="profile.php">Profile</a>
</div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        echo '<h2>Student Details:</h2>';
        echo '<pre>';
        print_r($_POST); 
        echo '</pre>';
    }
    ?>
<div class="form-container">
<form name="logBookForm" method="post" action="display.php" onsubmit="return validateForm()">
    <img src="uitm.jpg" alt="UITM Logo" width="300" height="300">
    <h2>Industrial Training LogBook</h2>
        <fieldset>
            <legend>Student Details</legend>
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="dob">Date of birth:</label>
            <input type="date" name="dob" required>

            <label for="utmId">UITM ID:</label>
            <input type="text" name="utmId" maxlength="10" title="UITM ID must have 10 digits" required>

            <label for="icNumber">IC Number:</label>
            <input type="text" name="icNumber" maxlength="12"  title="IC Number must have 12 digits" required>

            <label for="course">Select a Course:</label>
                <select name="course" id="course" required>
                    <option value="" disabled selected>Select Your Course</option>
                    <option value="AS201">AS201 : Bachelor of Science (Hons.) Biology - KAMPUS ARAU</option>
                    <option value="AS203">AS203 : Bachelor of Science (Hons.) Physics</option>
                    <option value="AS222">AS222 : Bachelor of Science (Hons.) Chemistry with Management</option>
                    <option value="AS243">AS243 : Bachelor of Science (Hons) Polymer Technology</option>
                    <option value="AS245">AS245 : Bachelor of Science (Hons) Applied Chemistry</option>
                    <option value="AS256">AS256 : Bachelor of Science (Hons.) Marine Technology</option>
                    <option value="BA240">BA240 : Bachelor of Business Administration (Hons) Marketing</option>
                    <option value="BA242">BA242 : Bachelor of Business Administration (Hons) Finance</option>
                    <option value="BA243">BA243 : Bachelor of Business Administration (Hons) Human Resource Management</option>
                    <option value="CS240">CS240 : Bachelor Of Information Technology(Hons.)</option>
                    <option value="SR243">SR243 : Bachelor of Sports Science (Hons.)</option>
                </select>
                <br>

         
    <div class="form-group">
        <br>
        <label for="semester">Semester:</label>
        <select class="form-control" name="semester" required>
        <option value="" disabled selected>Select Your Semester</option>

            <option value="Semester 1">Semester 1</option>
            <option value="Semester 2">Semester 2</option>
            <option value="Semester 3">Semester 3</option>
            <option value="Semester 4">Semester 4</option>
            <option value="Semester 5">Semester 5</option>
            <option value="Semester 6">Semester 6</option>
            <option value="Semester 7">Semester 7</option>
        </select>
    </div>
    <br>


            <label for="year">Year:</label>
            <input type="text" name="year" required>

            <label for="homeAddress">Home Address:</label>
            <textarea name="homeAddress" required></textarea>
        </fieldset>
        </fieldset>

        <fieldset>
            <legend>Training Address</legend>
            <label for="trainingAddress">Address during Practical Training:</label>
            <textarea name="trainingAddress" required></textarea>
        </fieldset>

        <fieldset>
            <legend>Training Details</legend>
            <label for="companyAddress">Company and Address:</label>
            <textarea name="companyAddress" required></textarea>

            <label for="companyContact">Company Contact No:</label>
            <input type="text" name="companyContact" required>

            <label for="supervisorName">Name of Supervisor In-charge:</label>
            <input type="text" name="supervisorName" required>

            <label for="supervisorPosition">Position of Supervisor In-charge:</label>
            <input type="text" name="supervisorPosition" required>

            <label for="supervisorEmail">Email of Supervisor In-charge:</label>
            <input type="email" name="supervisorEmail" required>

            <div class="duration-container">
                <label for="trainingDurationFrom">Training Duration (From):</label>
                <input type="date" name="trainingDurationFrom" required>

                <label for="trainingDurationTo">Training Duration (To):</label>
                <input type="date" name="trainingDurationTo" required>
            </div>
        </fieldset>

        <fieldset>
            <legend>Contact Person (In Emergency)</legend>
            <label for="emergencyName">Name:</label>
            <input type="text" name="emergencyName" required>

            <label for="emergencyAddress">Address:</label>
            <textarea name="emergencyAddress" required></textarea>

            <label for="emergencyContact">HP No:</label>
            <input type="text" name="emergencyContact" required>

            <div class="radio-group">
                <label>Relationship:</label>
                <label><input type="radio" name="emergencyRelationship" value="parent"> Parent</label>
                <label><input type="radio" name="emergencyRelationship" value="sibling"> Sibling</label>
                <label><input type="radio" name="emergencyRelationship" value="relative"> Relative</label>
                <label><input type="radio" name="emergencyRelationship" value="friend"> Friend</label>
            </div>
        </fieldset>

        <form method="post" action="process.php" enctype="multipart/form-data">
        <label for="studentImage">Upload Student Image:</label>
        <input type="file" name="studentImage" id="studentImage" accept="image/*">

        <button type="submit">Submit</button>
        <button type="reset" class="reset">Reset</button>
    
    </form>
</body>
<?php include_once('footer.php'); ?>

    </body>
    </html>
