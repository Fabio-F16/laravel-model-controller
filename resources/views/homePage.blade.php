@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Film</h1>
        <div class="row justify-content-center">
            @foreach ($movies as $item)
                <div class="ff-card col-12 col-md-5 m-2">
                    <h3>Titolo: {{ $item['title'] }}</h3>
                    <h6>Titolo originale: {{ $item['original_title'] }}</h6>
                    <p>Voto: {{ $item['vote'] }}</p>
                    <p>Nazionalità: {{ $item['nationality'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
