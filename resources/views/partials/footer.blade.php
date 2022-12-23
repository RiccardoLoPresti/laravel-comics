<footer>

    <div class="main-wrapper">

      <div class="container container-footertop">

            <nav>
                <ul>

                    @foreach (config('comics.objetcs') as $objetc )
                        <li >
                            <h3>{{$objetc['title']}}</h3>

                            <a href="#">{{$objetc['subtitle'][1]}}</a>
                        </li>
                    @endforeach

                </ul>

            </nav>
        </div>

    </div>

    <div class="footer-bot">
        <div class="container container-footertbottom">

            <div class="sign-up">
                <a href="#">sign-up now!</a>
            </div>

            <div class="socials">
                <h3>Follow us</h3>
                <ul>
                    @foreach (config('comics.socials') as $social )
                        <li>
                            <a href="{{$social['href']}}">
                                <img src="{{$social['img']}}" :alt="{{$social['img']}}">
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>

        </div>

    </div>




</footer>
