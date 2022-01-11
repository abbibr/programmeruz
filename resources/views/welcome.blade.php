<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmeruz</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <div class="container">
        <h1>Home Workouts</h1>

        <div class="blocks">
            <div class="block">
                <h2>0</h2>
                <h3>Workouts</h3>
            </div>
            <div class="block">
                <h2>0</h2>
                <h3>Kcal</h3>
            </div>
            <div class="block">
                <h2>0</h2>
                <h3>Minutes</h3>
            </div>
        </div>

        <h2 id="challenge">Challenges</h2>

            <div class="gallery swiper mySwiper swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="gallery_list swiper-wrapper" id="swiper-wrapper-c0af27bdc4ae8f13" aria-live="polite" style="cursor: grabbing; transition-duration: 0ms; transform: translate3d(-763.497px, 0px, 0px);">
                
                @foreach($challenges as $challenge)

                    <div class="gallery_item swiper-slide" role="group" aria-label="1 / 9" style="transition-duration: 0ms; transform: translate3d(0px, 0px, -343.666px) rotateX(0deg) rotateY(171.833deg) scale(1); z-index: -2;">
                        <img src="{{ asset('images') }}/{{ $challenge->image }}" class="aaa">
                        <div class="text">
                            <p>{{ $challenge->title }}</p>
                            <div class="links">
                                <a href="#">{{ $challenge->week }}</a>
                                <p>{{ $challenge->percent }}</p>
                            </div>
                        </div>
                    <div class="swiper-slide-shadow-left" style="opacity: 3.43666; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div></div>
                
                @endforeach

            </div>

        <div id="space"></div>

        @foreach($workouts as $workout)

            <div class="blog">
                <div class="img">
                    <img src="{{ asset('images') }}/{{ $workout->image }}">
                </div>
                <div class="text">
                    <h2><a href="{{route('transformation',$workout->id)}}">{{ $workout->title }}</a></h2>
                    <p>{{ $workout->paragraph }}</p>
                </div>
            </div>

        @endforeach

    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>