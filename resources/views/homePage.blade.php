@extends('layouts.app')

@section('content')
    @foreach ($movie as $item)
        <div class="card">
            <h3>Titolo: {{ $item['title'] }}</h3>
            <h6>Titolo originale: {{ $item['original_title'] }}</h6>
            <p>Voto: {{ $item['vote'] }}</p>
            <p>Nazionalità: {{ $item['nationality'] }}</p>
        </div>
    @endforeach
@endsection
