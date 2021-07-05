<?php
include("config.php");
access();
$id = $_POST["id"];
$name = $_POST['name'];
$description = $_POST['description'];
$level = $_POST['level'];
$ancestor = $_POST['ancestor'];
$update = mysqli_query($mysql, "UPDATE `obj` SET `name`='$name', `description`='$description', `level`='$level', `ancestor`='$ancestor' WHERE `id` = '$id'");
header("Location: index.php");
mysqli_close($mysql);