<?php
include("config.php");
include("template.php");
access();
echo $header_adm;
$id = $_GET["id"];
$name = $_GET["name"];
$description = $_GET["description"];
$level = $_GET["level"];
$ancestor = $_GET["ancestor"];
?>

<div id="obj_box_insert">
    <div id="obj_title_insert">Изменить объект</div>
    <hr />
    <form action="obj_update.php" method="post" name="form" id="form" enctype="multipart/form-data">
        <input type="text" name="id" id="id" value="<?php echo $id; ?>" hidden /> <!-- скрытое поле для передачи id -->
        <input type="text" name="name" id="name" placeholder="Наименование" autofocus="autofocus" required value="<?php echo $name; ?>" />
        <input type="text" name="description" id="description" placeholder="Описание" onkeyup="check()" required value="<?php echo $description; ?>" />
        <input type="text" name="level" id="level" placeholder="Уровень" required value="<?php echo $level; ?>" />

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

        <input type="submit" id="obj_insert_button" value="Изменить" name="submit" />
    </form>
</div>
<div id="back_from_update"><a href="index.php">Вернуться</a></div>