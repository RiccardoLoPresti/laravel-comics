<footer>

    <div class="main-wrapper">

      <div class="container container-footertop">

            <nav>
                <ul>

                    @foreach ($objetcs as $objetc )
                        <li >
                            <h3></h3>
                            <a href="#">{{$objetc['title']}}</a>
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
                    <li v-for="(element, index) in elements" :key="index">
                        <a href="#">
                            <img :src="getPathImg(element.img)" :alt="element.img">
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </div>




</footer>
