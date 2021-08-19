<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="form-control" style="width: 70%" id="paddocks">
    <div class="form-control flex-col">
        <span>Загон 1</span>
        <textarea id=""></textarea>
        <button onclick="add_sheep(1)">Добавить 1 овцу в загон 1</button>
        <button onclick="kill_sheep(1)">убить 1 овцу из загона 1</button>
        <span>Загон 2</span>
        <textarea></textarea>
        <button onclick="add_sheep(2)">Добавить 1 овцу в загон 2</button>
        <button onclick="kill_sheep(2)">убить 1 овцу из загона 2</button>
    </div>
    <div class="form-control flex-col">
        <span>Загон 3</span>
        <textarea></textarea>
        <button onclick="add_sheep(3)">Добавить 1 овцу в загон 3</button>
        <button onclick="kill_sheep(3)">убить 1 овцу из загона 3</button>
        <span>Загон 4</span>
        <textarea></textarea>
        <button onclick="add_sheep(4)">Добавить 1 овцу в загон 4 </button>
        <button onclick="kill_sheep(4)">убить 1 овцу из загона 4</button>
    </div>
</div>
<a href="report.php"><input type="button">Отчёт</a>



<script>
    //добавление овцы в выбранный загон
    function add_sheep(id){
        $.ajax({
            method: 'post',
            url: 'add_sheep.php',
            data:{
                paddock_id:id,
            },
            success: function(response){
               location.reload();
            },
        });
    }
//убийство овцы из выбранного загона
    function kill_sheep(id){
        $.ajax({
            method: 'post',
            url: 'kill_sheep.php',
            data:{
                paddock_id:id,
            },
            success: function(response){
                location.reload();
            },
        });
    }
//счётчик дней
    function day_pass(){
        $.ajax({
            method: 'post',
            url: 'day_pass.php',
            success: function(response){
            },
        });
    }

    //фронт подргрузка загонов
    (new_day=function () {
        $.ajax({
            method: 'post',
            url: 'action.php',
            success: function(response){
                document.getElementById('paddocks').innerHTML=response;
            },
        });
    })();

    setInterval(new_day,10000);
</script>




