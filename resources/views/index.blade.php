<!doctype html>
            <html>
                 <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                 <title>PULS</title>
                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                <style>body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: linear-gradient(to right, #D500F9, #FFD54F);
    background-repeat: no-repeat
}

input,
textarea {
    background-color: #F3E5F5;
    border-radius: 50px !important;
    padding: 12px 15px 12px 15px !important;
    width: 100%;
    box-sizing: border-box;
    border: none !important;
    border: 1px solid #F3E5F5 !important;
    font-size: 16px !important;
    color: #000 !important;
    font-weight: 400
}
select {
    background-color: #F3E5F5;
    border-radius: 50px !important;
    padding: 5px 15px 5px 15px !important;
    width: 100%;
    box-sizing: border-box;
    border: none !important;
    border: 1px solid #F3E5F5 !important;
    font-size: 16px !important;
    color: #000 !important;
    font-weight: 400
}

input:focus,
select:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #D500F9 !important;
    outline-width: 0;
    font-weight: 400
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.card {
    border-radius: 0;
    border: none
}

.card1 {
    width: 50%;
    padding: 40px 30px 10px 30px
}

.card2 {
    width: 50%;
    background-image: linear-gradient(to right, #FFD54F, #D500F9)
}

#logo {
    width: 200px;
    height: 150px
}

.heading {
    margin-bottom: 60px !important
}

::placeholder {
    color: #000 !important;
    opacity: 1
}

:-ms-input-placeholder {
    color: #000 !important
}

::-ms-input-placeholder {
    color: #000 !important
}

.form-control-label {
    font-size: 12px;
    margin-left: 15px
}

.msg-info {
    padding-left: 15px;
    margin-bottom: 30px
}

.btn-color {
    border-radius: 50px;
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9);
    padding: 15px;
    cursor: pointer;
    border: none !important;
    margin-top: 40px
}

.btn-color:hover {
    color: #fff;
    background-image: linear-gradient(to right, #D500F9, #FFD54F)
}

.btn-white {
    border-radius: 50px;
    color: #D500F9;
    background-color: #fff;
    padding: 8px 40px;
    cursor: pointer;
    border: 2px solid #D500F9 !important
}

.btn-white:hover {
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9)
}

a {
    color: #000
}

a:hover {
    color: #000
}

.bottom {
    width: 100%;
    margin-top: 50px !important
}

.sm-text {
    font-size: 15px
}

@media screen and (max-width: 992px) {
    .card1 {
        width: 100%;
        padding: 40px 30px 10px 30px
    }

    .card2 {
        width: 100%
    }

    .right {
        margin-top: 100px !important;
        margin-bottom: 100px !important
    }
}

@media screen and (max-width: 768px) {
    .container {
        padding: 10px !important
    }

    .card2 {
        padding: 50px
    }

    .right {
        margin-top: 50px !important;
        margin-bottom: 50px !important
    }
}</style>
     </head>
        <body oncontextmenu='' class='snippet-body'>
        <div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="/img/logo.png"  > </div>
                        <h3 class="mb-5 text-center heading">PULS</h3>
                        <div id="msg-info" style="color: rgb(214, 37, 14)" >
                            <small style="color: rgb(214, 37, 14)" class="msg-info">
                                <a id="msg_error"></a>ПУЛЬС
                            </small>
                        </div>
                        <br>
                        <form id="formDta" method="POST" action="{{route('crud')}}" enctype="multipart/form-data" >
                        @csrf
                            <div class="form-group">
                             <label class="form-control-label text-muted">имя Фамилия<a style="color: rgb(235, 26, 26)" >*</a></label>
                             <input type="text" id="e1" name="name" placeholder="имя Фамилия:" class="form-control">
                        </div>
                        <div class="form-group">
                            <label   id="inputState" class="form-control-label text-muted" >Пол<a style="color: rgb(235, 26, 26)" >*</a></label>
                                <select id="e2"  class="form-control" aria-label="Default select example" name="pol" >
                                    <option value="мужчина"  > мужчина</option>
                                    <option value="женщина"> женщина</option>
                                </select>
                        </div>
                        <div class="form-group">
                             <label class="form-control-label text-muted">Дата рождения<a style="color: rgb(235, 26, 26)" >*</a></label>
                              <input type="date" min="1950-06-07" id="e3" name="data_type" placeholder="Дата рождения:" class="form-control">
                        </div>
                        <div class="row justify-content-center my-3 px-3">
                            <button type="submit" class="btn-block btn-color">Отправить данные</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-3"> &copy; 2021 | веб-разработчик Ваисов Азамат
                </div>
            </div>
            <div class="card card2">
                <div id="box11" class="my-auto mx-md-5 px-md-5 right">
                    <div id="conener1" style="display:none">
                    <h5 iclass="text">Информация !</h5>
                    <p id="x1" class="text-white">дорогая: <a style="color:  rgb(0, 0, 0)" id="a1">
                    </a>
                    твое сердце <a  style="color: rgb(0, 0, 0)" id="a3" >
                        </a> период <a style="color: rgb(0, 0, 0)">{{date("Y-m-d H:i")}}</a>
                        круглый  <a id="a4" >
                        </a> когда-то гнал кровь!
                    </p>
                    <br>
                    <small id="box13" class="text-white">Благодарим за использование сервиса и желаем здоровья!
                    </small>
                    </div>
                    <div id="conener2" >
                    <h5 id="box12" class="text"> Знай свое собственное сердце.</h5>
                    <small id="box13" class="text-white">Напомним, что данные основаны на математических расчетах. !
                    </small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
<script type='text/javascript'>
    $('#formDta').submit(function(e){
       e.preventDefault();
       $.ajax({
           url:$(this).attr('action'),
           dataType:'JSON',
           type:'POST',
           data:$(this).serialize(),
           success: function(response){
               if(response.status){
                   $('#conener1').css("display","");
                   $('#a1').html(response.name);
                   $('#a3').html(response.data_type);
                   $('#a4').html(response.blood);
                   $('#conener2').css("display","none");
                   $('#msg-info').html(" ");

               }
               else{
                        $('#msg-info').text('');
                        if(response.data==="sana ma'lumoti hato !"){
                                $('#msg-info').text(response.data);
                         }
                         else{
                                 var a="";
                                 $.each(response.data, function (index, item) {

                                 a=a+"<a style='color: rgb(235, 26, 26)'>"+item[0]+"</a> <br>"
                                  });
                                 $('#msg-info').html(a);
                            }
                $('#conener1').css("display","none");
                $('#conener2').css("display","");
               }
    }
       });
       $('#e1').val(" ");
       $('#e2').val(" ");
       $('#e3').val("");

    });
</script>
</body>
</html>
