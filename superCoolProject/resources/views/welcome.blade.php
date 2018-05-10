@extends('layout')

@section('header')
  <title>a</title>


@section('content')

      @if (empty($fruits))
        there is no friuts
      @else
        there are something
      @endif

      @foreach ($fruits as $fruit)
        <li>{{ $fruit }}</li>
      @endforeach
@stop