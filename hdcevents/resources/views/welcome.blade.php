@extends('layouts.main')

@section('title', 'GRS Events')

@section('content')

@foreach($events as $event)
    <p>{{ $event->title }} -- {{ $event->description }}</p>
@endforeach
@endsection
