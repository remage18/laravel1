@extends('template')

@section('title')
    Route1
@endsection

@section('route_name')
    @if($Name == NULL)
        What is your name?
        <form action="{{ route('route1') }}" method="GET" target="_self">
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
