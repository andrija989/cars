@extends('layouts.master')

@section('content')
<h1>Car producer: {{$car->producer}}</h1>
<h3>Car name: {{$car->title}}</h3>
<h3>Number of doors: {{$car->number_of_doors}}</h3>
@endsection