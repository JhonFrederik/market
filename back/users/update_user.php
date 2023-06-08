<?php
include_once("../config/cnx_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $userId = $_POST["id"];
    $firstName = $_POST["f_name"];
    $lastName = $_POST["l_name"];
    $email = $_POST["email"];

    // Consulta para actualizar los datos del usuario
    $sql = "UPDATE users SET Firs_Name = '$firstName', Last_Name = '$lastName', email = '$email' WHERE id = '$userId'";

    if ($conn->query($sql) === TRUE) {
        echo "User has been updated successfully";
    } else {
        echo "Error updating user: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
