<?php

use Illuminate\Support\Facades\URL;

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Nguyen Cong Luat - Todo List</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        {{--            Navbar Contents--}}
    </nav>
    <div class="container">
        @if(count($errors) > 0)

            <div class="alert alert-danger">
                <h3 class="text text-danger">Bạn đã gặp lỗi :))</h3>
                <br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
</body>
</html>

