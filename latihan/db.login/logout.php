<?php 
session_start();
require'logincek.php';

session_destroy();

header("Location:../index.php")


?>