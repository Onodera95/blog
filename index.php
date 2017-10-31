<html>
<head>
    <title>Категория</title>
    <meta charset='utf-8'>
</head>
<body>
<div>
    <table class="table" border="1px">
        <tbody>
        <tr>


        <?php

        include_once('DB.php');

        // подключаемся к серверу
        $link = mysqli_connect($db_host, $db_user, $db_password, $db_name)
        or die("Ошибка " . mysqli_error($link));
        if($link)
        {
            echo "Подключено";
        }

        echo '<br>';

        // выполняем операции с базой данных
        $query ="SELECT * FROM category";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if($result)
        {
            echo "Выполнение запроса прошло успешно";
        }
        echo "<br>";
        echo "<br>";

        // Цикл по recordset $result
        // Каждый ряд становится массивом ($row) с помощью функции mysql_fetch_array
        while($row = mysqli_fetch_array($result)) {

            // Записать значение столбца FirstName (который является теперь массивом $row)
            echo $row['id'] . ". ";
            echo $row['name'] . "<br />";

            echo '<td>'. $row['name'] . '</td>';

        }

        // закрываем подключение
        mysqli_close($link);

        ?>
        </tr>
        </tbody>
    </table>

</div>
</body>
</html>
