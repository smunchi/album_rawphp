<?php
    session_start();
    if(isset($_SESSION['message'])) {
        echo '<div style="color:green">'. $_SESSION['message']. '</div>';
        unset($_SESSION['message']);
    }
?>