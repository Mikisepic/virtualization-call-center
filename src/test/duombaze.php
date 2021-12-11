<?php
$ip = "10.0.1.139";
$port = "7127";
$db_name = "app_db";
$user = "app_user";
$password = "password";
$connStr = "host=$ip port=$port dbname=$db_name user=$user password=$password";
//connection to data base
$conn = pg_connect($connStr);
$query = "select * from employees;";
$result = pg_query($conn, $query);
//stores result as rows
$row = pg_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MADComms - Database</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }

        table {
            border-spacing: 5px;
        }
    </style>

</head>

<body>
    <table style="width:100%">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>SSN</th>
            <th>Birthday Date</th>
            <th>Adress</th>
            <th>Gender</th>
            <th>Salary</th>
            <th>Department Number</th>
        </tr>
        <?php
        while ($row = pg_fetch_assoc($result)) {
            echo
            "<tr>
                <td>" . $row['fname'] . "</td>
                <td>" . $row['lname'] . "</td>
                <td>" . $row['ssn'] . "</td>
                <td>" . $row['bdate'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['salary'] . "</td>
                <td>" . $row['dno'] . "</td>
            </tr>";
        }
        ?>
    </table>
</body>

</html>