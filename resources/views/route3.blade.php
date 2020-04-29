@extends('template')

@section('title')
    Route3
@endsection

@section('route_name')
    @if(!isset($Name))
        What is your name?
        <form action="{{ route('route3') }}" method="POST" target="_self">
            @csrf
            <label for="Name"></label>
            <input type="text" id="Name" name="Name" placeholder="type here">
        </form>
    @else
        Hello, {{$Name}}!
    @endif
@endsection

@section('content')
    <a href="../">Back</a>
@endsection
