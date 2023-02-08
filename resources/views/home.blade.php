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
                <img src="{{ $comicEl['thumb'] }}" alt="">
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
        <div class="banner-element">
            
        </div>
    </div>
</section>
@endsection