@extends('layouts.main')

@push('head')
<title>UpdateTodo</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-iten-center my-5">
        <div class="h2">Update</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary">Back</a>
    </div>
</div>
<div style="padding-left: 30%; padding-right: 30%"">
<div class="card" style="padding-left: 18%; padding-right: 18%; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
    <div class="card-body">
        <form action="{{route("todo.updateData")}}" method="post">
            @csrf
            <label for="" class="form-label mt-4">Name</label>
            <input type="text" name="name" class="form-control" value="{{$todo->name}}">
            <label for="" class="form-label mt-4">Work</label>
            <input type="text" name="work" class="form-control" value="{{$todo->work}}">
            <label for="" class="form-label mt-4">Due Date</label>
            <input type="date" name="dueDate" class="form-control" value="{{$todo->dueDate}}">
            <input type="number" name="id" value="{{$todo->id}}" hidden>
            <button class="btn btn-primary btn-ig mt-5">Update Todo</button>
        </form>
    </div>
</div>
</div>

@endsection