<?php

session_start();
session_destroy();

header("Location:http://localhost/login_mypage/login_mypage/login.php");

?>