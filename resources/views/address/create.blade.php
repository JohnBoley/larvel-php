@extends('layouts.app')
@section('content')
    <h1>Add Address</h1>
    {!! Form::open(['url' => 'address']) !!}
      @include('address._form')
    <div class="form-group">
      {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}
@endsection
    