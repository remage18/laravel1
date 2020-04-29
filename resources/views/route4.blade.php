@extends('template')

@section('title')
    Laravel
@endsection

@section('route_name')
    @foreach($text as $txt)
        {{$txt}}
    @endforeach
@endsection

@section('content')
    <a href="../">Back</a>
@endsection
