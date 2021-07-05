<?php
include("config.php");
access();
$id = $_GET["id"];
$delete = mysqli_query($mysql, "DELETE FROM `obj` WHERE `id` = '$id'");
header("Location: index.php");
mysqli_close($mysql);