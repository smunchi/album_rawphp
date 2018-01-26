<?php
session_start();
if(isset($_POST)) {
    $name = $_POST['name'];
    $query = "INSERT INTO albums(name) VALUES('".$name."')";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn)) {
        $_SESSION['message'] = 'Album created.';     
    }
    header('location:index.php?page=list_album');
}
?>
