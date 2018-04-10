<?php
session_start();
header('location:index.php');

$_SESSION["loginname"] = $_POST['loginname'];
