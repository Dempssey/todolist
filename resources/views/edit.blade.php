
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <form action="{{ route('tasks.update',[$task]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{ old('name', $task->name) }} " >
            </div>

            @error('name')
            <div class="alert alert-danger alert-dismissible">{{ $message }}</div>
        @enderror


            <div class="form-group">
              <label for="exampleInputPassword1">Tool</label>
              <input type="text" class="form-control" name="tool" placeholder="Tool" value="{{ old('tool', $task->tool ) }}" >
            </div>
            @error('tool')
            <div class="alert alert-danger alert-dismissible">{{ $message }}</div>
        @enderror

<br>
            <button type="submit" class="btn btn-success">UPDATE</button>
          </form>
    </div>
</div>
@endsection
