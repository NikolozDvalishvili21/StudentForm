<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">

        <label for="">First Name:</label>
        <input type="text" name="firstName" required>
        <br><br>

        <label for="">Last Name:</label>
        <input type="text" name="lastName" required>
        <br><br>


        <label for="">Course Year:</label>
        <input type="text" name="course" required>
        <br><br>

        <label for="">Learning Course:</label>
        <input type="text" name="learningCourse" required>
        <br><br>

        <label for="">Term:</label>
        <input type="text" name="term" required>
        <br><br>

        <label for="">Grade:</label>
        <input type="text" name="grade" min="0" max="100" required>
        <br><br>


        <label for="">Lecturer Name:</label>
        <input type="text" name="lecturerName" required>
        <br><br>


        <label for="">Lecturer Surname:</label>
        <input type="text" name="lecturerSurname" required>
        <br><br>


        <label for="">Dean Name:</label>
        <input type="text" name="DeanName" required>
        <br><br>


        <label for="">Dean Surname:</label>
        <input type="text" name="DeanSurname" required>
        <br><br>

        <button>Submit</button>



    </form>

    <?php

    if ($_POST) {

        if (isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["course"]) && isset($_POST["learningCourse"]) && isset($_POST["term"]) && isset($_POST["grade"]) && isset($_POST["lecturerName"]) && isset($_POST["lecturerSurname"]) && isset($_POST["DeanName"]) && isset($_POST["DeanSurname"])) {

            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $course = $_POST["course"];
            $learningCourse = $_POST["learningCourse"];
            $term = $_POST["term"];
            $grade = $_POST["grade"];
            $lecturerName = $_POST["lecturerName"];
            $lecturerSurname = $_POST["lecturerSurname"];
            $DeanName = $_POST["DeanName"];
            $DeanSurname = $_POST["DeanSurname"];

            if ($grade < 50) {
                $gradeLetter = "F. Failed";
            } elseif ($grade < 60) {
                $gradeLetter = "E. Passed";
            } elseif ($grade < 70) {
                $gradeLetter = "D. Passed averagely";
            } elseif ($grade < 80) {
                $gradeLetter = "C. Nicely Done";
            } elseif ($grade < 90) {
                $gradeLetter = "B. Well Done";
            } else {
                $gradeLetter = "A. Excellent";
            }

            echo "<h2>Student Details</h2>";
            echo "<table border='1'>";
            echo "<tr><th>First Name</th><th>Last Name</th><th>Course</th><th>Learning Course</th><th>Term</th><th>Received Mark</th><th>Grade</th><th>Lecturer Name</th><th>Lecturer Surname</th><th>Dean Name</th><th>Dean Surname</th></tr>";
            echo "<tr><td>$firstName</td><td>$lastName</td><td>$course</td><td>$learningCourse</td><td>$term</td><td>$grade</td><td>$gradeLetter</td><td>$lecturerName</td><td>$lecturerSurname</td><td>$DeanName</td><td>$DeanSurname</td></tr>";
            echo "</table>";

        }
    }

    ?>

    <style>
        table {
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 8px;
            text-align: center;
        }
    </style>



</body>

</html>