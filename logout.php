<?php
session_start();
session_destroy();
header('location:parents_login.php');
?>