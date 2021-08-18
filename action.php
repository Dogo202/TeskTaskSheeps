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
        </div>
        <?
            }
        }
    }
}
$connection->close();
