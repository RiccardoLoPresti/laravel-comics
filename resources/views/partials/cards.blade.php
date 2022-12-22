<main>
    <div class="container container-cards">
        <div class="card-section">

            @foreach ($collections as $collection )
                <div class="cards">
                    <img src="{{$collection['thumb']}}" alt="{{$collection['series']}}">
                    <p>{{$collection['series']}}</p>
                    <div class="overlay">
                        <p>{{$collection['price']}}</p>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="button">
            <button>Load More</button>
        </div>
    </div>
</main>
