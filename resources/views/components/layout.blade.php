<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/storage/assets/icon_web.webp" sizes="32x32 100x100" />
    <title>{{ $title }} - JGEC</title>
    <link rel="icon" href="{{ url('/storage/images/assets/jgec_jgpi_logo.png') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('scripts')

</head>
    <body>
        {{-- <x-alert></x-alert> --}}
        <main>
            {{ $slot }}
        </main>

        <button onclick="scrollToTop()" id="backToTop" title="Go to top">
            <i class="fa-regular fa-circle-up"></i>
        </button>

        <script>
            // Show the button when scrolling down
            window.onscroll = function () {
                let btn = document.getElementById("backToTop");
                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                    btn.style.display = "flex";
                } else {
                    btn.style.display = "none";
                }
            };

            // Smooth scroll to top
            function scrollToTop() {
                window.scrollTo({ top: 0, behavior: "smooth" });
            }
        </script>

    </body>

</html>
