@extends('layouts.main')

@push('head')
<title>Todo List App</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-iten-center my-5">
        <div class="h2">Add Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary">Back</a>
    </div>
</div>
<div style="padding-left: 30%; padding-right: 30%">
<div class="card" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;">
    <div class="card-body" style="padding-left: 18%; padding-right: 18%;">
        <form action="{{route("todo.store")}}" method="post">
        @csrf    
        <label for="" class="form-label mt-4">Name</label>
            <input type="text" name="name" class="form-control">
            <div class="text-danger">
                @error('name')
                {{$message}}
                @enderror
            </div>
            <label for="" class="form-label mt-4">Work</label>
            <input type="text" name="work" class="form-control">
            <div class="text-danger">
                @error('work')
                {{$message}}
                @enderror
            </div>
            <label for="" class="form-label mt-4">Due Date</label>
            <input type="date" name="dueDate" class="form-control">
            <div class="text-danger">
                @error('dueDate')
                {{$message}}
                @enderror
            </div>
            <center><button class="btn btn-primary btn-ig mt-5">Add Todo</button></center>
        </form>
    </div>
    

</div>
</div>

@endsection