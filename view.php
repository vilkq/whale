<?php
include("config.php");
include("template.php");
echo $header_view;
?>

<div id="obj_box">
    <div id="obj_title">Список объектов</div>
    <div id="view_back"><a href="index.php"><<< вернуться</a></div>
    <?php
    $getcurrent = mysqli_query($mysql, "SELECT * FROM `obj` ORDER BY `id` DESC");
    while($r=mysqli_fetch_array($getcurrent)){
        extract($r);
    ?>
        <hr />
        <div id="obj_name">
            <?php echo $name?>
        </div>
        <div id="obj_description">
            <?php echo $description?>
        </div>
    <?php } //закрывается while?>
</div>

<?
echo $footer_adm;
mysqli_close($mysql);