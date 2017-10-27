<html>
<head>
    <title>Профиль</title>
    <meta charset='utf-8'>
</head>
<body>

<br/>
<br/>

<?php

include_once('DB.php');

// подключаемся к серверу
var_dump($db_host);
$link = mysqli_connect($db_host, $db_user, $db_password, $db_name)
or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
$query ="SELECT * FROM category";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
var_dump($result);
if($result)
{
    echo "Выполнение запроса прошло успешно";
}

// закрываем подключение
mysqli_close($link);

?>

<br/>
<br/>
</body>
</html>
