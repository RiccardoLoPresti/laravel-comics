<main>
    <div class="container container-cards">
        <div class="card-section">

            @foreach ($cards as $card )
                <div class="cards">
                    <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
                    <p>{{$card['title']}}</p>
                    <div class="overlay">
                        <p>{{$card['price']}}</p>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="button">
            <button>Load More</button>
        </div>
    </div>
</main>
