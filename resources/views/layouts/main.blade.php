<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-PRrgQVJ8NNHGieOA1grGdCTIt4h21CzJs6SnWH4YMQ6G5F5+IEzOHz67L4SQaF0o" crossorigin="anonymous">
    <div class="">
        <div class="container py-3" style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
            <div class="h2 text-black text-center" style=" background-color: rgba(240,0,250, 0.8); padding: 1%; border-radius: 5px; ">Todo List App</div>
        </div>
    </div>
    @yield('main-section')
    <?php
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-color: rgba(240,0,250, 0.3);
    }
</style>
<body>
    
</body>
</html>