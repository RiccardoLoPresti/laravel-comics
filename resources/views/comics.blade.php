@extends('layouts.main')

@section('content')

<main>
    <div class="container container-cards">
        <div class="card-section">

            @foreach ($cards as $card )
                <a href="#">
                    <div class="cards">
                        <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
                        <p>{{$card['title']}}</p>
                        <div class="overlay">
                            <p>{{$card['price']}}</p>
                        </div>
                    </div>
                </a>

            @endforeach

        </div>

        <div class="button">
            <button>Load More</button>
        </div>
    </div>
</main>

@endsection
