<?php
?>
@extends('layouts.app')
{{-- Noi dung trang con --}}
@section('content')
    <div class="card-body bg-yellow-300">
        @include('error')
        <form action="{{url('task')}}" method="post" class="form-horizontal">
            @csrf
            {{-- {{csrf_field()}} --}}
           {{-- Ten Task --}}
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" placeholder="Nhập nhiệm vụ...">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">Add Task</button>
                </div>
            </div>
        </form>

    </div>
@endsection

