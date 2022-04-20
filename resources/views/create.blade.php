
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <form action="{{ route('tasks.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter tool name">
            </div>

            @error('name')
            <div class="alert alert-danger alert-dismissible">{{ $message }}</div>
        @enderror


            <div class="form-group">
              <label for="exampleInputPassword1">Tool</label>
              <input type="text" class="form-control" name="tool" placeholder="Tool">
            </div>
            @error('tool')
            <div class="alert alert-danger alert-dismissible">{{ $message }}</div>
        @enderror

<br>


            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" class="form-control" name="image" >
              </div>
              @error('image')
              <div class="alert alert-danger alert-dismissible">{{ $message }}</div>
          @enderror
          <br>

            <button type="submit" class="btn btn-primary">Create</button>
          </form>
    </div>
</div>
@endsection
