<?php
$con = new PDO("mysql:host=localhost;dbname=logindetails",'root','');
$usermail= $_POST["email"];
$password= $_POST["password"];

$dbuser= "select * from "
?>