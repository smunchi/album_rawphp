<?php
    $conn = mysqli_connect("localhost", 'root', '') or die('Unable to connect Database Server. '.  mysqli_connect_error());
    mysqli_select_db($conn, 'photo_album_app') or die("Unable to select Database. ". mysqli_error($conn));
?>
