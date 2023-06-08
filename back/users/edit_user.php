<?php
include_once("../config/cnx_db.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $userId = $_GET["id"];

    // Consulta para obtener los datos del usuario específico
    $sql = "SELECT * FROM users WHERE id = '$userId'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Variables con los datos del usuario para prellenar el formulario
        $firstName = $row['Firs_Name'];
        $lastName = $row['Last_Name'];
        $email = $row['email'];

        // Renderizar el formulario de edición
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Edit User</title>
            <style>
                h1 {
                    text-align: center;
                }
            
                form {
                    max-width: 300px;
                    margin: 0 auto;
                }
            
                label {
                    display: block;
                    margin-bottom: 5px;
                }
            
                input[type='text'],
                input[type='email'] {
                    width: 100%;
                    padding: 5px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    margin-bottom: 10px;
                }
            
                input[type='submit'] {
                    display: block;
                    width: 100%;
                    padding: 10px;
                    background-color: #4CAF50;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
            
                input[type='submit']:hover {
                    background-color: #45a049;
                }
            
                
            .list-button {
                text-align: center;
                margin-top: 10px;
            }
            
            .list-button a {
                display: inline-block;
                padding: 8px 16px;
                background-color: #f44336;
                color: #fff;
                text-decoration: none;
                border-radius: 4px;
            }
            
            .list-button a:hover {
                background-color: #d32f2f;
            }
            </style>
        </head>
        <body>
            <h1>Edit User</h1>
            <form action='update_user.php' method='post'>
                <input type='hidden' name='id' value='$userId'>
                <label for='f_name'>First Name:</label>
                <input type='text' name='f_name' id='f_name' value='$firstName' required>
                <br>
                <label for='l_name'>Last Name:</label>
                <input type='text' name='l_name' id='l_name' value='$lastName' required>
                <br>
                <label for='email'>Email:</label>
                <input type='email' name='email' id='email' value='$email' required>
                <br>
                <input type='submit' value='Update User'>
                <div class='list-button'>
                    <a href='list_user.php'>Go to List</a>
                </div>
            </form>
        </body>
        </html>";
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request.";
}
?>
