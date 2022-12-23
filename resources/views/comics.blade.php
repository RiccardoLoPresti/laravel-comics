@extends('layouts.main')

@section('content')

<main>
    <div class="container container-cards">
        <div class="card-section">

            @foreach ($cards as $card )
                <a href="{{route('card_detail', ['id' => $card['id']] )}}">
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

<section>
    <div class="container container-cta">

        <nav>
            <ul>
                @foreach ($elements as $element )

                    <li>
                        <a href="{{$element['href']}}">
                            <div class="image">
                                <img src="{{$element['img']}}" alt="{{$element['text']}}">
                            </div>
                            <div class="text">
                                <span>{{$element['text']}}</span>
                            </div>
                        </a>
                    </li>

                @endforeach
            </ul>
        </nav>

    </div>
</section>

@endsection
