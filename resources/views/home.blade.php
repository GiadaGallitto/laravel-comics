@extends('layouts.app')

@section('main-content')
<section class="content-part">
    <div class="jumbotron">

    </div>

    <div class="comics-grid">
        <div class="current blue-btn"><h2>Current Series</h2></div>
        @foreach ($comicsList as $comicEl)            
        <div class="comics-card">
            <div class="image-box">
                <img src="{{ $comicEl['thumb'] }}" alt="card">
            </div>
            <div class="text-box">
                <p>{{$comicEl['series']}}</p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="more-btn blue-btn">Load More</div>
</section>

<section class="icons-nav">
    <div class="icons-container">
        @foreach ($iconList as $iconEl)
        <div class="banner-element">
            <img src="{{ Vite::asset("resources/assets/img/{$iconEl['icon']}") }}" alt="icon">
            <p>{{$iconEl['text']}}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection