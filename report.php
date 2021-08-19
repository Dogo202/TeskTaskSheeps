<?php
$host_db = 'localhost';
$name_db = 'root';
$password_db = 'root';
$db= 'TestTask';
$connection = new mysqli($host_db,$name_db,$password_db,$db);
?>
<table>
    <thead>
        <th>Действие </th>
        <th>Общее количество овец </th>
        <th>Убитые овцы </th>
        <th>Живые овцы </th>
        <th>День </th>
        <th>Самый заселённый </th>
        <th>менее заселённый </th>
        <th>Комментарий </th>
    </thead>
    <tbody>
        <tr>
            <?
                $history=$connection->query("select * from history");
                if(($historys=$history->fetch_assoc())!=""){
                    ?>
                    <td><?=$historys['action']?></td>
                    <td><?=$historys['total_sheeps']?></td>
                    <td><?=$historys['killed_sheeps']?></td>
                    <td><?=$historys['not_dead_sheeps']?></td>
                    <td><?=$historys['time']?></td>
                    <td><?=$historys['most_inhabited']?></td>
                    <td><?=$historys['less_inhabited']?></td>
                    <td><?=$historys['coment']?></td>
                    <?
                }
            ?>
        </tr>
    <?
        while($historys=$history->fetch_assoc()){
            ?>
            <tr>
            <td><?=$historys['action']?></td>
            <td><?=$historys['total_sheeps']?></td>
            <td><?=$historys['killed_sheeps']?></td>
            <td><?=$historys['not_dead_sheeps']?></td>
            <td><?=$historys['time']?></td>
            <td><?=$historys['most_inhabited']?></td>
            <td><?=$historys['less_inhabited']?></td>
            <td><?=$historys['comment']?></td>
            </tr>
            <?
        }
    ?>
    </tbody>
</table>
<a href="main.php">Вернуться назад</a>
<?php
$connection->close();
?>
