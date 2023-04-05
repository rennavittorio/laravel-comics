@extends('layouts.app')

@section('content')
    
    <div class="grid-layout">
        @foreach ($comics as $comic)
        
            <div class="grid-card">
                <div class="wrapper-img">
                    <img src="{{ Vite::asset('resources/img/joker-cover1.jpg') }}" alt="">
                </div>
                <div class="wrapper-text">
                    <p class="title">
                        {{ $comic['title'] }}
                    </p>
                </div>
            </div>

        @endforeach
    </div>

@endsection