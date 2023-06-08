<?php
include_once("../config/cnx_db.php");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .center {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #45a049;
        }
        
        .icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row['Firs_Name']."</td>
                <td>".$row['Last_Name']."</td>
                <td>".$row['email']."</td>
                <td><a href='edit_user.php?id=".$row['id']."'><img src='../../Front/icons/update.png' class='icon'></a></td>
                <td><a href='http://127.0.0.1/Market/back/users/delete_user.php?id=".$row['id']."'><img src='../../Front/icons/delete.png' class='icon'></a></td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data</td></tr>";
        }
        ?>
    </table>
    
    <div class="center">
        <a href="http://127.0.0.1/Market/back/users/" class="btn">Volver</a>
    </div>
</body>
</html>

