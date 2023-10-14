<!doctype html>
<html lang="en">
<head>
    <title>Student records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #0073e6;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header img {
            max-width: 100px;
            vertical-align: middle;
        }

        h1 {
            display: inline;
            margin-left: 10px;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #0073e6;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #005bad;
        }
    </style>
</head>
<body>
    <header>
        <img src="file:///C:/Users/taran/OneDrive/Documents/STUDENT_LOGO1.png" alt=""><h1>student data</h1>
    </header>
    <h2>Provide us student data</h2>
    <form action="file:///C:/Users/taran/OneDrive/Documents/addcontent.php" method="post">
        <label for="student_name">Student Name:</label>
        <input type="text" id="student_name" name="student_name" required>

        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required>

        <label for="grade">Grade:</label>
        <input type="number" id="grade" name="grade" required>

        <input type="submit" value="Add Student">
        <p><a href="file:///C:/xampp/htdocs/assignment%201%20php/viewcontent.php">Go to Page 2</a></p>

    </form>
    
    <?php
    ?>
</body>
</html>
