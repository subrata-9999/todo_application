@extends('layouts.main')

@push('head')
<title>Todo List App</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-iten-center my-5">
        <div class="h2">All Todos</div>
        <a href="{{route("todo.create")}}" class="btn btn-primary">Add Todo</a>
    </div>
</div>
<div style="padding-left: 10%; padding-right: 10%;">
    <table class="table table-striped table-hover text-center rounded" style=" border: 2px solid rgba(240,0,250, 0.5); box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;">
        <tr class="table-primary">
            <th>Name</th>
            <th>Work</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>
        @foreach($todos as $todo)
        <tr class="table-warning" valign='middle'>
            <td>{{$todo->name}}</td>
            <td>{{$todo->work}}</td>
            <td>{{$todo->dueDate}}</td>
            <td>
                <a href="{{route("todo.edit", $todo->id)}}" class="btn btn-outline-success btn-sm">Update</a>
                <a href="{{route("todo.delete", $todo->id)}}" class="btn btn-outline-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection