
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Tool</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $t)


              <tr>
                <th scope="row">{{ $t->id}}</th>
                <td>{{ $t->name }}</td>
                <td>{{ $t->tool }}</td>
                <th scope="col">
                    <form action="{{ route('tasks.destroy',[$t->id])}}" method="post">
                        @method('delete')
                    @csrf
                    <button class="btn btn-danger">DELETE</button>
                    </form>
                    <a href="{{ route('tasks.show',[$t->id]) }}" class="btn btn-info">VIEW</a>
                    <a href="{{ route('tasks.edit',[$t->id]) }}" class="btn btn-warning">UPDATE</a>
                    </th>

              </tr>

              @endforeach
            </tbody>
          </table>

    </div>
</div>
@endsection
