@extends('layouts.main')

@section('content')
<main>
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
  </main>

@endsection

