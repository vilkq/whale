<?php
include("config.php");
access();
$name = $_POST['name'];
$description = $_POST['description'];
$level = $_POST['level'];
$ancestor = $_POST['ancestor'];
$insert = mysqli_query($mysql, "INSERT INTO `obj` (`id`, `name`, `description`, `level`, `ancestor`)" . " VALUES (NULL, '$name', '$description', '$level', '$ancestor')");
header("Location: index.php");
mysqli_close($mysql);










/*include("config.php");
access();
$name = $_POST['name'];
$description = $_POST['description'];

$check_name = mysqli_query($mysql, "SELECT * FROM `obj` WHERE `name`='$name'");
$return = mysqli_num_rows($check_name);
if($return > "0"){
    echo "Такое имя существует";
}
else {
    $insert = mysqli_query($mysql, "INSERT INTO `obj` (`id`, `name`, `description`)" . " VALUES (NULL, '$name', '$description')");
    header("Location: index.php");
}
mysqli_close($mysql);*/