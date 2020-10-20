@extends('layouts.app')

@section('content')

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th scope="col"> Name </th>
            <th scope="col"> Email </th>
            <th scope="col"> Message </th>
        </tr>
        </thead>
        <tbody>
            @if(count($messages) > 0)
                @foreach($messages -> all() as $message)
        <tr>
                    <th scope="row">{{ $message -> id }}</th>
                    <td>{{ $message -> name }}</td>
                    <td>{{ $message -> email }}</td>
                    <td>{{ $message -> message }}</td>
        </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection

@section('sidebar')
    @parent
@endsection
