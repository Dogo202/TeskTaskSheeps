<?php
$host_db = 'localhost';
$name_db = 'root';
$password_db = 'root';
$db= 'TestTask';
$connection = new mysqli($host_db,$name_db,$password_db,$db);
$k=1;
$paddocks=$connection->query("select * from paddock");
if(($paddock=$paddocks->fetch_assoc())!=''){
    $number=$paddock['id'];
    if($number==1){
        ?>
        <div class="form-control flex-col">
        <span>Загон <?=$number?></span>
        <textarea id="">
            <?
                $PS=$connection->query("select * from paddock_sheep where paddock_id='$number'");
                if(($sheep_paddock=$PS->fetch_assoc())!=""){
                    $sheep_id=$sheep_paddock['sheep_id'];
                    $sheeps=$connection->query("select * from sheeps where id='$sheep_id'");
                    if(($sheep=$sheeps->fetch_assoc())!=''){
                        $sheep_name=$sheep['name'];
                        ?>
                        <?=$sheep_name?>
                        <?
                    }
                    while($sheep_paddock=$PS->fetch_assoc()){
                        $sheep_id=$sheep_paddock['sheep_id'];
                    $sheeps=$connection->query("select * from sheeps where id='$sheep_id'");
                    if(($sheep=$sheeps->fetch_assoc())!=''){
                        $sheep_name=$sheep['name'];
                        ?>
                        <?=$sheep_name?>
                        <?
                        }
                    }
                }
                    ?>
        </textarea>
        <button onclick="add_sheep(1)">Добавить 1 овцу в загон 1</button>
        <button onclick="kill_sheep(1)">убить 1 овцу из загона 1</button>
        <?
        while($paddock=$paddocks->fetch_assoc()){
            $number=$paddock['id'];
            if ($number==2){
                ?>
                <span>Загон <?=$number?></span>
                <textarea id="">
            <?
            $PS=$connection->query("select * from paddock_sheep where paddock_id='$number'");
            if(($sheep_paddock=$PS->fetch_assoc())!=""){
                $sheep_id=$sheep_paddock['sheep_id'];
                $sheeps=$connection->query("select * from sheeps where id='$sheep_id'");
                if(($sheep=$sheeps->fetch_assoc())!=''){
                    $sheep_name=$sheep['name'];
                    ?>
                    <?=$sheep_name?>
                    <?
                }
                while($sheep_paddock=$PS->fetch_assoc()){
                    $sheep_id=$sheep_paddock['sheep_id'];
                    $sheeps=$connection->query("select * from sheeps where id='$sheep_id'");
                    if(($sheep=$sheeps->fetch_assoc())!=''){
                        $sheep_name=$sheep['name'];
                        ?>
                        <?=$sheep_name?>
                        <?
                    }
                }
            }
            ?>
        </textarea>
                <button onclick="add_sheep(2)">Добавить 1 овцу в загон 1</button>
                <button onclick="kill_sheep(2)">убить 1 овцу из загона 1</button>
        </div>
                <?
            }elseif ($number==3){
        ?>
        <div class="form-control flex-col">
        <span>Загон <?=$number?></span>
        <textarea id="">
            <?
            $PS=$connection->query("select * from paddock_sheep where paddock_id='$number'");
            if(($sheep_paddock=$PS->fetch_assoc())!=""){
                $sheep_id=$sheep_paddock['sheep_id'];
                $sheeps=$connection->query("select * from sheeps where id='$sheep_id'");
                if(($sheep=$sheeps->fetch_assoc())!=''){
                    $sheep_name=$sheep['name'];
                    ?>
                    <?=$sheep_name?>
                    <?
                }
                while($sheep_paddock=$PS->fetch_assoc()){
                    $sheep_id=$sheep_paddock['sheep_id'];
                    $sheeps=$connection->query("select * from sheeps where id='$sheep_id'");
                    if(($sheep=$sheeps->fetch_assoc())!=''){
                        $sheep_name=$sheep['name'];
                        ?>
                        <?=$sheep_name?>
                        <?
                    }
                }
            }
            ?>
        </textarea>
                <button onclick="add_sheep(3)">Добавить 1 овцу в загон 1</button>
                <button onclick="kill_sheep(3)">убить 1 овцу из загона 1</button>
        <?
            }elseif ($number==4){
               ?>
           <span>Загон <?=$number?></span>
        <textarea id="">
            <?
            $PS=$connection->query("select * from paddock_sheep where paddock_id='$number'");
            if(($sheep_paddock=$PS->fetch_assoc())!=""){
                $sheep_id=$sheep_paddock['sheep_id'];
                $sheeps=$connection->query("select * from sheeps where id='$sheep_id'");
                if(($sheep=$sheeps->fetch_assoc())!=''){
                    $sheep_name=$sheep['name'];
                    ?>
                    <?=$sheep_name?>
                    <?
                }
                while($sheep_paddock=$PS->fetch_assoc()){
                    $sheep_id=$sheep_paddock['sheep_id'];
                    $sheeps=$connection->query("select * from sheeps where id='$sheep_id'");
                    if(($sheep=$sheeps->fetch_assoc())!=''){
                        $sheep_name=$sheep['name'];
                        ?>
                        <?=$sheep_name?>
                        <?
                    }
                }
            }
            ?>
        </textarea>
                <button onclick="add_sheep(4)">Добавить 1 овцу в загон 1</button>
                <button onclick="kill_sheep(4)">убить 1 овцу из загона 1</button>
        </div>
        <?
            }
        }
    }
}
$connection->close();
