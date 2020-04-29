@extends('template')

@section('title')
    Laravel
@endsection

@section('route_name')
    Laravel
@endsection

@section('content')
    <a href={{route('route1', ['Name' => $Name ?? ''])}}>Route1</a>
    <a href={{route('route2')}}>Route2</a>
    <a href={{route('route3')}}>Route3</a>
    <a href={{route('route4')}}>Route4</a>
@endsection
