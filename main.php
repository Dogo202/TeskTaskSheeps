<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="form-control" style="width: 30%" id="paddocks">
    <div class="form-control flex-col">
        <span>Загон 1</span>
        <textarea id=""></textarea>
        <span>Загон 2</span>
        <textarea></textarea>
    </div>
    <div class="form-control flex-col">
        <span>Загон 3</span>
        <textarea></textarea>
        <span>Загон 4</span>
        <textarea></textarea>
    </div>
</div>



<script>
    function day_pass(){

    }

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




