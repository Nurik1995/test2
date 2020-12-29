<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ Session::token() }}">
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>

<script>


    function f1() {
        console.log('salam');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.post("data", null, function (data, status) {
            console.log(data.ad);
            console.log(data.soyad);
        });

        // $.ajax({
        //     url: 'data',
        //     method: 'post',
        //     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //     contentType: 'application/json',
        //     data: {ad: 'Nurik', yash: 25},
        //     success: function (data) {
        //         // so something
        //     }
        // })
    }

    $(document).ready(function () {
        $(".z").click(function () {
            console.log("basildi");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.post("data", function (data, status) {
                // alert("Data: " + data + "\nStatus: " + status);
            });
        });
    });


    // $("#a").click(function () {
    //
    //     $.get("data", {name: "Donald", town: "Ducktown"});
    // });

</script>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <form class="form-inline">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Axtar</span>
            </div>
            <input type="text" class="form-control" placeholder="Username">
        </div>
    </form>
</nav>
<br>

<button onclick="f1()">oldbutton</button>
<button class="z">clickable</button>

<div class="row">
    <div class="col-sm-8 " style="background-color: red;">1</div>
    <div class="col-sm-2" style="background-color: blue;">2</div>
    <div class="col-sm-2" style="background-color: green;">3</div>

</div>

<form action="/data" method="get">
    {{--    @csrf--}}
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit" value="send">

</form>

</body>
</html>
