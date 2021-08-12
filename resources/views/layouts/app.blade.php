<?php
use Illuminate\Support\Facades\URL;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nguyen Cong Luat - Todo List</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <h2 class="text-red-500">Tasks</h2>
            </nav>
            @if(count($task) > 0)
                <div class="card bg-green-200">
                    <div class="card-body bg-blue-300">
                        <h4 class="text text-secondary">All Task</h4>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Task</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($task as $t)
                                <tr>
                                    <td>{{$t->name}}</td>
                                    <td style="text-align: right"><form action="/task/{{$t->id}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-default" ><i class="fa fa-minus-circle"></i> Delete Task</button>
                                        </form></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
        </div>
        <br>
        <div class="container">
            <div class="card">
            @yield('content')
            </div>
        </div>
    </body>
</html>