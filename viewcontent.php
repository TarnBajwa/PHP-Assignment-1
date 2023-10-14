!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color:#0073e6;
            color: white;
            padding: 20px;
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #0073e6;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Students Records</h1>
    <div class="container">
    <h2>Student records</h2>
        <table>
            <tr>
                <th>Full Name</th>
                <th>Student ID</th>
                <th>Course</th>
                <th>Grade</th>
            </tr>
            <?php
//Database Connectivity
            $servername="localhost";
            $username="root";
            $password="Tarnbajwa@2";
            $database="studentrecord";

            //creating a connection

            $conn=mysqli_connect($servername, $username, $password, $database);

            //die if connection failed
            if(!$conn)
            {
                die("Sorry, connection failed!!".mysqli_connect_error());
            }
            else
            {
                echo "Connection Sucessfull";
            }

            $sql="SELECT * FROM `studentrecord`";
            $result=mysqli_query($conn, $sql);

            //Find the number of records in the table
            $num=mysqli_num_rows($result);
            echo "<br/>";
            echo $num;

           
            
            //display records using while statement

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['student_name'] . "</td>";
                echo "<td>" . $row['student_id'] . "</td>";
                echo "<td>" . $row['course'] . "</td>";
                echo "<td>" . $row['grade'] . "</td>";
                echo "</tr>";
            }
          
?>
</table>
  </div>
</body>
</html>