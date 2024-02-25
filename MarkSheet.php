<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Firstname</label>
        <input type="text" name="firstname" required>
        <br><br>
        <label for="">Lastname</label>
        <input type="text" name="lastname" required>
        <br><br>
        <label for="">Course</label>
        <input type="text" name="course" required>
        <br><br>
        <label for="">Term</label>
        <input type="text" name="term" required>
        <br><br>
        <label for="">Faculty</label>
        <input type="text" name="faculty" required>
        <br><br>
        <label for="">Received Mark</label>
        <input type="text" name="grade" required>
        <br><br>
        <label for="">Lecturer firstname</label>
        <input type="text" name="lecFirst" required>
        <br><br>
        <label for="">Lecturer lastname</label>
        <input type="text" name="lecLast" required>
        <br><br>
        <label for="">Dean firstname</label>
        <input type="text" name="deanFirst" required> 
        <br><br>
        <label for="">Dean lastname</label>
        <input type="text" name="deanLast" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_POST) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $course = $_POST["course"];
        $term = $_POST["term"];
        $faculty = $_POST["faculty"];
        $receivedMark = $_POST["grade"];
        $lecFirst = $_POST["lecFirst"];
        $lecLast = $_POST["lecLast"];
        $deanFirst = $_POST["deanFirst"];
        $deanLast = $_POST["deanLast"];

        function getGrade($mark) {
            if ($mark > 90) {
                return 'A - Excellent';
            } elseif ($mark > 80) {
                return 'B - Very Good';
            } elseif ($mark > 70) {
                return 'C - Good';
            } elseif ($mark > 60) {
                return 'D - Satisfactory';
            } elseif ($mark > 50){
                return 'E - pass';
            } else {
                return 'F - Fail';
            }
        }

        $grade = getGrade($receivedMark);

        echo "<h2>Grade Report</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Firstname</td>
                    <td>$firstname</td>
                </tr>
                <tr>
                    <td>Lastname</td>
                    <td>$lastname</td>
                </tr>
                <tr>
                    <td>Course</td>
                    <td>$course</td>
                </tr>
                <tr>
                    <td>Term</td>
                    <td>$term</td>
                </tr>
                <tr>
                    <td>Faculty</td>
                    <td>$faculty</td>
                </tr>
                <tr>
                    <td>Received Mark</td>
                    <td>$receivedMark ($grade)</td>
                </tr>
                <tr>
                    <td>Lecturer Firstname</td>
                    <td>$lecFirst</td>
                </tr>
                <tr>
                    <td>Lecturer Lastname</td>
                    <td>$lecLast</td>
                </tr>
                <tr>
                    <td>Dean Firstname</td>
                    <td>$deanFirst</td>
                </tr>
                <tr>
                    <td>Dean Lastname</td>
                    <td>$deanLast</td>
                </tr>
            </table>";
    }
    ?>
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
</body>
</html>
