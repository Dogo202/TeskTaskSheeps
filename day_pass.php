<?php
$host_db = 'localhost';
$name_db = 'root';
$password_db = 'root';
$db= 'TestTask';
$connection = new mysqli($host_db,$name_db,$password_db,$db);

$time=$connection->query("select * from day");
$days=$time->fetch_assoc();
$day=$days['day']+1;
if($day%2!=0){
    $paddock=$connection->query("select paddock_id ,COUNT(sheep_id)as count_id from paddock_sheep group by paddock_id HAVING count_id = 1");
    if(($paddocks=$paddock->fetch_assoc())!=''){
        $paddock_id=$paddocks['paddock_id'];
        $replace=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id) Desc");
        $replaces=$replace->fetch_assoc();
        $replace_paddock=$replaces['paddock_id'];
        $replace_sheep=$connection->query("SElect * from paddock_sheep where paddock_id='$replace_paddock'");
        $replaces_sheep=$replace_sheep->fetch_assoc();
        $replacing_sheep=$replaces_sheep['sheep_id'];
        $delete_paddock=$connection->query("Delete from paddock_sheep where paddock_id='$replace_paddock' and sheep_id='$replacing_sheep'");
        $delete_paddock=$connection->query("Insert into paddock_sheep (paddock_id,sheep_id) values ('$paddock_id','$replacing_sheep')");
    }
    $new_sheeps=$connection->query("select max(id) as max_number from sheeps");
    $new_sheep=$new_sheeps->fetch_assoc();
    $sheep_id=$new_sheep['max_number']+1;
    $name_sheep="Овечка$sheep_id";
    $sheep_update=$connection->query("INSERT INTO `sheeps`(`name`) VALUES ('$name_sheep')");

    $new_sheep_in_paddock=$connection->query("select paddock_id ,COUNT(sheep_id)as count_id from paddock_sheep group by paddock_id HAVING count_id > 1");
    $paddock_array=[];

    if(($new_sheep_in_paddocks=$new_sheep_in_paddock->fetch_assoc())!=''){
        array_push($paddock_array,$new_sheep_in_paddocks['paddock_id']);
        while($new_sheep_in_paddocks=$new_sheep_in_paddock->fetch_assoc()){
            array_push($paddock_array,$new_sheep_in_paddocks['paddock_id']);
        }
        $y=array_rand($paddock_array,1);
        $add_sheep_paddock=$paddock_array[$y];
        $new_sheep_in_paddock=$connection->query("Insert into paddock_sheep (paddock_id,sheep_id) values ('$add_sheep_paddock','$sheep_id')");
    }


    $comment="Была добавлена новая овца = $name_sheep";
    $paddock_update=$connection->query("INSERT INTO `paddock_sheep`(`paddock_id`, `sheep_id`) VALUES ('$paddock_id','$sheep_id')");
    $old_historys=$connection->query("Select * from history where id=(select max(id) as max_id from history)");

    if(($old_history=$old_historys->fetch_assoc())!=""){
        $killed=$old_history['killed_sheeps'];
        $alive=$old_history['not_dead_sheeps']+1;
        $date = "день $day";
        $most_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id) Desc");
        $most_inhabiteds=$most_inhabiteded->fetch_assoc();
        $most_inhabited=$most_inhabiteds['paddock_id'];
        $less_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id)");
        $less_inhabiteds=$less_inhabiteded->fetch_assoc();
        $less_inhabited=$less_inhabiteds['paddock_id'];
        $history=$connection->query("INSERT INTO `history`(`comment`, `action`, `total_sheeps`, `killed_sheeps`, `not_dead_sheeps`, `time`, `most_inhabited`, `less_inhabited`) VALUES ('$comment','+ Овца','$sheep_id','$killed','$alive','$date','$most_inhabited','$less_inhabited')");
    }else{
        $killed=0;
        $alive=11;
        $date = "день $day";
        $most_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id) Desc");
        $most_inhabiteds=$most_inhabiteded->fetch_assoc();
        $most_inhabited=$most_inhabiteds['paddock_id'];
        $less_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id)");
        $less_inhabiteds=$less_inhabiteded->fetch_assoc();
        $less_inhabited=$less_inhabiteds['paddock_id'];
        $history=$connection->query("INSERT INTO `history`(`comment`, `action`, `total_sheeps`, `killed_sheeps`, `not_dead_sheeps`, `time`, `most_inhabited`, `less_inhabited`) VALUES ('$comment','+ Овца','$sheep_id','$killed','$alive','$date','$most_inhabited','$less_inhabited')");
    }


}
elseif($day%2==0){
    $paddock=$connection->query("select paddock_id ,COUNT(sheep_id)as count_id from paddock_sheep group by paddock_id HAVING count_id = 1");
    if(($paddocks=$paddock->fetch_assoc())!=''){
        $paddock_id=$paddocks['paddock_id'];
        $replace=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id) Desc");
        $replaces=$replace->fetch_assoc();
        $replace_paddock=$replaces['paddock_id'];
        $replace_sheep=$connection->query("SElect * from paddock_sheep where paddock_id='$replace_paddock'");
        $replaces_sheep=$replace_sheep->fetch_assoc();
        $replacing_sheep=$replaces_sheep['sheep_id'];
        $delete_paddock=$connection->query("Delete from paddock_sheep where paddock_id='$replace_paddock' and sheep_id='$replacing_sheep'");
        $delete_paddock=$connection->query("Insert into paddock_sheep (paddock_id,sheep_id) values ('$paddock_id','$replacing_sheep')");
    }
    $new_sheeps=$connection->query("select max(id) as max_number from sheeps");
    $new_sheep=$new_sheeps->fetch_assoc();
    $sheep_id=$new_sheep['max_number']+1;
    $name_sheep="Овечка$sheep_id";
    $sheep_update=$connection->query("INSERT INTO `sheeps`(`name`) VALUES ('$name_sheep')");

    $new_sheep_in_paddock=$connection->query("select paddock_id ,COUNT(sheep_id)as count_id from paddock_sheep group by paddock_id HAVING count_id > 1");
    $paddock_array=[];

    if(($new_sheep_in_paddocks=$new_sheep_in_paddock->fetch_assoc())!=''){
        array_push($paddock_array,$new_sheep_in_paddocks['paddock_id']);
        while($new_sheep_in_paddocks=$new_sheep_in_paddock->fetch_assoc()){
            array_push($paddock_array,$new_sheep_in_paddocks['paddock_id']);
        }
        $y=array_rand($paddock_array,1);
        $add_sheep_paddock=$paddock_array[$y];
        $new_sheep_in_paddock=$connection->query("Insert into paddock_sheep (paddock_id,sheep_id) values ('$add_sheep_paddock','$sheep_id')");
    }


    $comment="Была добавлена новая овца = $name_sheep";
    $paddock_update=$connection->query("INSERT INTO `paddock_sheep`(`paddock_id`, `sheep_id`) VALUES ('$paddock_id','$sheep_id')");
    $old_historys=$connection->query("Select * from history where id=(select max(id) as max_id from history)");
    if(($old_history=$old_historys->fetch_assoc())!=""){
        $killed=$old_history['killed_sheeps'];
        $alive=$old_history['not_dead_sheeps']+1;
        $date = "день $day";
        $most_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id) Desc");
        $most_inhabiteds=$most_inhabiteded->fetch_assoc();
        $most_inhabited=$most_inhabiteds['paddock_id'];
        $less_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id)");
        $less_inhabiteds=$less_inhabiteded->fetch_assoc();
        $less_inhabited=$less_inhabiteds['paddock_id'];
        $history=$connection->query("INSERT INTO `history`(`comment`, `action`, `total_sheeps`, `killed_sheeps`, `not_dead_sheeps`, `time`, `most_inhabited`, `less_inhabited`) VALUES ('$comment','+ Овца','$sheep_id','$killed','$alive','$date','$most_inhabited','$less_inhabited')");
    }
    else{
        $killed=0;
        $alive=11;
        $date = "день $day";
        $most_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id) Desc");
        $most_inhabiteds=$most_inhabiteded->fetch_assoc();
        $most_inhabited=$most_inhabiteds['paddock_id'];
        $less_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id)");
        $less_inhabiteds=$less_inhabiteded->fetch_assoc();
        $less_inhabited=$less_inhabiteds['paddock_id'];
        $history=$connection->query("INSERT INTO `history`(`comment`, `action`, `total_sheeps`, `killed_sheeps`, `not_dead_sheeps`, `time`, `most_inhabited`, `less_inhabited`) VALUES ('$comment','+ Овца','$sheep_id','$killed','$alive','$date','$most_inhabited','$less_inhabited')");
    }
    $kills=$connection->query("select * from sheeps");
    $array_of_sheeps=[];
    while($kill=$kills->fetch_assoc()){
        array_push($array_of_sheeps,$kill['id']);
    }
    $t=array_rand($array_of_sheeps,1);
    $id_kill=$array_of_sheeps[$t];
    $kills=$connection->query("delete from sheeps where id='$id_kill'");
    $kills=$connection->query("delete from paddock_sheep where sheep_id='$id_kill'");

    $comment="Была убита овца = овечка$id_kill";
    $old_historys=$connection->query("Select * from history where id=(select max(id) as max_id from history)");
    $old_history=$old_historys->fetch_assoc();
    $killed=$old_history['killed_sheeps']+1;
    $alive=$old_history['not_dead_sheeps'];
    $date = "день $day";
    $most_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id) Desc");
    $most_inhabiteds=$most_inhabiteded->fetch_assoc();
    $most_inhabited=$most_inhabiteds['paddock_id'];
    $less_inhabiteded=$connection->query("select paddock_id, count(paddock_id) from paddock_sheep GROUP BY paddock_id ORDER BY count(paddock_id)");
    $less_inhabiteds=$less_inhabiteded->fetch_assoc();
    $less_inhabited=$less_inhabiteds['paddock_id'];
    $history=$connection->query("INSERT INTO `history`(`comment`, `action`, `total_sheeps`, `killed_sheeps`, `not_dead_sheeps`, `time`, `most_inhabited`, `less_inhabited`) VALUES ('$comment','- Овца','$sheep_id','$killed','$alive','$date','$most_inhabited','$less_inhabited')");
}
$time=$connection->query("Update day set day='$day'");
$connection->close();