<?php
$host_db = 'localhost';
$name_db = 'root';
$password_db = 'root';
$db= 'TestTask';
$connection = new mysqli($host_db,$name_db,$password_db,$db);

$time=$connection->query("select * from day");
$days=$time->fetch_assoc();
$day=$days['day'];

if($day/2!=0){
    $paddock=$connection->query("select paddock_id ,COUNT(sheep_id)as count_id from paddock_sheep group by paddock_id HAVING count_id = 1");
    if(($paddocks=$paddock->fetch_assoc())!=''){
        $paddock_id=$paddocks['paddock_id'];
        $new_sheeps=$connection->query("select max(id) as max_number from sheeps");
        $new_sheep=$new_sheeps->fetch_assoc();
        $sheep_id=$new_sheep['max_number']+1;
        $name_sheep="Овечка$sheep_id";
        $sheep_update=$connection->query("INSERT INTO `sheeps`(`name`) VALUES ([value-2])");
        $comment="Была добавлена новая овца = $name_sheep";
        $paddock_update=$connection->query("INSERT INTO `paddock_sheep`(`paddock_id`, `sheep_id`) VALUES ('$paddock_id','$sheep_id')");
        $old_historys=$connection->query("Select * from history where id=(select max(id) as max_id from history)");
        $old_history=$old_historys->fetch_assoc();
        $killed=$old_history['killed_sheeps'];
        $alive=$old_history['not_dead_sheeps'];
        $date = date("Y-m-d");
        $most_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id) Desc");
        $most_inhabiteds=$most_inhabiteded->fetch_assoc();
        $most_inhabited=$most_inhabiteds['paddock_id'];
        $less_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id)");
        $less_inhabiteds=$less_inhabiteded->fetch_assoc();
        $less_inhabited=$less_inhabiteds['paddock_id'];
        $history=$connection->query("INSERT INTO `history`(`comment`, `action`, `total_sheeps`, `killed_sheeps`, `not_dead_sheeps`, `time`, `most_inhabited`, `less_inhabited`) VALUES ('$comment','+ Овца','$sheep_id','$killed','$alive','$date','$most_inhabited','$less_inhabited')");
    }
}elseif($day/2==0){
    $paddock=$connection->query("select paddock_id ,COUNT(sheep_id)as count_id from paddock_sheep group by paddock_id HAVING count_id = 1");
    if(($paddocks=$paddock->fetch_assoc())!=''){
        $paddock_id=$paddocks['paddock_id'];
        $new_sheeps=$connection->query("select max(id) as max_number from sheeps");
        $new_sheep=$new_sheeps->fetch_assoc();
        $sheep_id=$new_sheep['max_number']+1;
        $name_sheep="Овечка$sheep_id";
        $sheep_update=$connection->query("INSERT INTO `sheeps`(`name`) VALUES ([value-2])");
        $comment="Была добавлена новая овца = $name_sheep";
        $paddock_update=$connection->query("INSERT INTO `paddock_sheep`(`paddock_id`, `sheep_id`) VALUES ('$paddock_id','$sheep_id')");
        $old_historys=$connection->query("Select * from history where id=(select max(id) as max_id from history)");
        $old_history=$old_historys->fetch_assoc();
        $killed=$old_history['killed_sheeps'];
        $alive=$old_history['not_dead_sheeps'];
        $date = date("Y-m-d");
        $most_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id) Desc");
        $most_inhabiteds=$most_inhabiteded->fetch_assoc();
        $most_inhabited=$most_inhabiteds['paddock_id'];
        $less_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id)");
        $less_inhabiteds=$less_inhabiteded->fetch_assoc();
        $less_inhabited=$less_inhabiteds['paddock_id'];
        $history=$connection->query("INSERT INTO `history`(`comment`, `action`, `total_sheeps`, `killed_sheeps`, `not_dead_sheeps`, `time`, `most_inhabited`, `less_inhabited`) VALUES ('$comment','+ Овца','$sheep_id','$killed','$alive','$date','$most_inhabited','$less_inhabited')");
    }
}
