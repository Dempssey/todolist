
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="card text-center">
            <div class="card-header">
             {{$task->id}}
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$task->name}}</h5>
              <p class="card-text">{{$task->tool}}</p>

            </div>

          </div>

    </div>
</div>
@endsection
