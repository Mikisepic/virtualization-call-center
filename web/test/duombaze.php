<?php
$ip = "10.0.1.225";
$port = "8531";
$db_name = "app_db";
$user = "app_user";
$password = "password";
$connStr = "host=$ip port=$port dbname=$db_name user=$user password=$password";
//connection to data base
$conn = pg_connect($connStr);
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
    <h2>Companies table</h2>
    <table style="width:100%">
        <tr>
            <th>Company ID</th>
            <th>Company Name</th>
            <th>Phone number</th>
        </tr>
        <?php
        $query = "select * from company;";
        $result = pg_query($conn, $query);
        //stores result as rows
        while ($row = pg_fetch_assoc($result)) {
            echo
            "<tr>
                <td>" . $row['com_id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['phone'] . "</td>
            </tr>";
        }
        ?>
    </table>
    <h2>Contact forms table</h2>
    <table style="width:100%">
        <tr>
            <th>Request ID</th>
            <th>Name and surename</th>
            <th>Phone number</th>
            <th>Email adress</th>
            <th>Message</th>
        </tr>
        <?php
        $query = "select * from contactrequest;";
        $result = pg_query($conn, $query);
        //stores result as rows
        while ($row = pg_fetch_assoc($result)) {
            echo
            "<tr>
                <td>" . $row['req_id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['message'] . "</td>
            </tr>";
        }
        ?>
    </table>
    
</body>

</html>