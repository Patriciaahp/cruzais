<body    onload=" setInterval(function(){ nextPage()
}, 4000);">
<div id="confettis z-0">
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>

<div  class=" grid grid-rows-5 grid-cols-3 place-content-center gap-8 text-center ">
    <img class=" row-start-3 col-start-2 m-auto" src="{{asset('img/cruzaislogo.svg')}}" alt="cruzais" >
    <h2 class=" text-greyLetter row-start-4 col-span-3">
        <b class="text-white" >i</b>
        Reencontrarse es posible

    </h2>
    <div class="loader row-start-5 col-start-3 -mt-14 ml-14 lg:-mt-14 lg:ml-20 ">
        <span class="movingDots"></span>
        <span class="movingDots"></span>
        <span class="movingDots"></span>

    </div>
</div>
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
    @endif
    </div>
</body>

<script>

    function nextPage() {
        window.location = '/account';
    }
</script>

