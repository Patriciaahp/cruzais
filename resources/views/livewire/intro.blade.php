<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Images intro</title>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <link
        href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
        rel="stylesheet"
    />
    <!-- Swiper's CSS -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
</head>

<body onload=" setInterval(function(){ nextPage()
}, 8000);">

<div class="text-center mt-10">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="m-auto mt-32"
                    src="{{asset('img/intro1.png')}}" alt="intro1"
                />
            </div>
            <div class="swiper-slide">
                <img class="m-auto mt-32"
                    src="{{asset('img/intro2.png')}}" alt="intro2"
                />
            </div>
            <div class="swiper-slide">
                <img class="m-auto mt-32"
                    src="{{asset('img/intro3.png')}}" alt="intro3"
                />
            </div>

        </div>
      <div class="mt-40">
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
      </div>

    </div>

<div class="mt-40" >
    <a  href="{{ route('welcome') }}">Saltar intro</a>
</div>
</div>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.mySwiper', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>
<script>

    function nextPage() {
        window.location = '/welcome';
    }
</script>

