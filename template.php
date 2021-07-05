<?php

$header_adm =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ru">
<head>
    <title>Структура данных</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css" media="all" />
    <script type="text/javascript" src="js.js"></script>
</head>
<body>
';

$header =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ru">
<head>
    <title>Структура данных</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css" media="all" />
    <script type="text/javascript" src="js.js"></script>
</head>
<body>
    <h2>Структура данных</h2>
    <hr />
    <form action="login_check.php" method="post">
        <table cellspacing="1" cellpadding="4" border="0" bgcolor="#fff">
            <tr><td width="130">Login</td><td><input type="text" name="login" autofocus="autofocus" required /></td></tr>
            <tr><td>Password</td><td><input type="password" name="pass" required /></td></tr>
        </table><br />
        <input type="submit" value="Вход" name="login_button" id="login_button" />
    </form>
    <div id="view_link"><a href="view.php">Только просмотр объектов >>></a></div>
';

$header_view =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ru">
<head>
    <title>Структура данных</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css" media="all" />
    <script type="text/javascript" src="js.js"></script>
</head>
<body>
';

$footer_adm =
'</body>
</html>
';

$footer =
'</body>
</html>
';
?>