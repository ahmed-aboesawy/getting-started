
@extends('layouts.app')

@section('content')
    <h1> Contact Page </h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="container">
            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name','',  ['class' => 'form-control', 'placeholder' => 'Enter Name ']) }}
            </div>
            <div class="form-group">
                {{ Form::label('email', 'E-Mail Address', ['class' => 'awesome']) }}
                {{ Form::text('email','',  ['class' => 'form-control', 'placeholder' => 'Enter E-mail ']) }}
            </div>
            <div class="form-group">
                {{ Form::label('message', '', ['class' => 'awesome']) }}
                {{ Form::textArea('message','',  ['class' => 'form-control', 'placeholder' => 'Enter Message ']) }}
            </div>
        </div>
        <div class="form-group">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection

