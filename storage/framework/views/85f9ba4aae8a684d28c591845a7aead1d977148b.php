<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(Session::token()); ?>">
    
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

<style>

    .klas {
        background-color: green;
    }
</style>

<script>

    var x = 0;

    $(document).ready(function () {
        $(window).resize(function () {
            $('span').text(x++);
        })
    });

    $(function () {
        $('button').on('click', function () {
            $(this).toggleClass('klas');

        })
    })


</script>

<button id="v">take</button>
<button class="klas">button2</button>
<button class="klas rr">button3</button>

<span>0</span>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lesson\resources\views/main2.blade.php ENDPATH**/ ?>