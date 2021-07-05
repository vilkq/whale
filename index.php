<?php
include("config.php");
include("template.php");
access();
echo $header_adm;
?>

<div id="obj_box_insert">
    <div id="obj_title_insert">Добавить объект</div>
    <hr />
    <form action="obj_insert.php" method="post" name="form" id="form" enctype="multipart/form-data">
        <input type="text" name="name" id="name" placeholder="Наименование" autofocus="autofocus" required value="<?php echo $_POST['name']; ?>" />
        <input type="text" name="description" id="description" placeholder="Описание" onkeyup="check()" required value="<?php echo $_POST['description']; ?>" />
        <input type="text" name="level" id="level" placeholder="Уровень" required value="<?php echo $_POST['level']; ?>" />

        <select name="ancestor" id="ancestor" required>
            <option disabled selected value> --- Выберите родителя --- </option>
        <?php
        $getcurrent = mysqli_query($mysql, "SELECT * FROM `obj` ORDER BY `id`");
        while($r=mysqli_fetch_array($getcurrent)){
            extract($r);
        ?>
            <option value="<?php echo $id ?>"><?php echo $name ?></option>
        <?php } //закрывается while?>
        </select>

        <input type="submit" id="obj_insert_button" value="Добавить" name="submit" />
    </form>
</div>
<div id="logout"><a href="logout.php">Выход</a></div>

<div id="obj_box">
    <div id="obj_title">Список объектов</div>
    <div id="obj_title_description"><b>₹</b> - редактирование <br> <b>˟</b> - удаление</div>
    <?php
    $getcurrent = mysqli_query($mysql, "SELECT * FROM `obj` ORDER BY `level` ASC");
    while($r=mysqli_fetch_array($getcurrent)){
        extract($r);
    ?>
        <hr />
        <div id="obj_name">
            <?php echo $name?>
            <a href='
obj_update_edit.php?
id=<?php echo $id?>&
name=<?php echo $name?>&
description=<?php echo $description?>&
level=<?php echo $level?>&
ancestor=<?php echo $id?>
                    'style="margin-left: 40px">₹</a>
            <a href='obj_delete.php?id=<?php echo $id?>' style="margin-left: 10px">˟</a>
        </div>
        <div id="obj_description">
            <?php echo $description?>
        </div>
    <?php } //закрывается while?>
</div>

<?
echo $footer_adm;
mysqli_close($mysql);