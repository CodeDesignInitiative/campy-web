<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>Code+Design | @yield('title')</title>

        <!-- Start: Favicons -->
{{--        <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
 --}}       <link rel="icon" type="image/png" href="/img/favicon-128x128.png" sizes="32x32">
            <link rel="icon" type="image/png" href="/img/favicon-128x128.png" sizes="16x16">
        <!-- End: Favicons -->

        <!-- Start: Open Graph -->
        <meta property="og:title" content="@yield('og:title')" /> <!-- Same title as in line 5 ? -->
        <meta property="og:description" content="@yield('og:description')" /> <!-- Same description as in line 14 ? -->
        <meta property="og:url" content="@yield('og:url')" />
        <meta property="og:image" content="@yield('og:image')" />
        <!-- End: Open Graph -->

        <!-- Start: Twitter Card -->
        <meta name="twitter:card" content="@yield('twitter:card')">
        <meta name="twitter:site" content="@yield('twitter:site')">
        <meta name="twitter:creator" content="@yield('twitter:creator')">
        <meta name="twitter:title" content="@yield('twitter:title')"> <!-- Same title as in line 5 ? -->
        <meta name="twitter:description" content="@yield('twitter:description')"> <!-- Same description as in line 14 ? -->
        <meta name="twitter:image" content="@yield('twitter:image')">
        <!-- End: Twitter Card -->

        <!-- Start: Other meta -->
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- End: Other meta -->

        <!-- Start: Styles -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <style>
            @font-face{
                font-family: 'Hans';
                src: url('/fonts/hans_grotesque_regular.eot');
                src: url('/fonts/hans_grotesque_regular.eot?#iefix') format('embedded-opentype'),
                     url('/fonts/hans_grotesque_regular.woff') format('woff'),
                     url('/fonts/hans_grotesque_regular.ttf') format('truetype');
                 font-weight: 200;
                }

            @font-face{
                font-family: 'Hans';
                src: url('/fonts/hans_grotesque_bold.eot');
                src: url('/fonts/hans_grotesque_bold.eot?#iefix') format('embedded-opentype'),
                     url('/fonts/hans_grotesque_bold.woff') format('woff'),
                     url('/fonts/hans_grotesque_bold.ttf') format('truetype');
                 font-weight: 600;
                }

            html,body,p {
                font-family: 'Hans';
            }
            .hyphens {
                -webkit-hyphens: auto;
                -moz-hyphens: auto;
				-ms-hyphens: auto;
                hyphens: auto;
            }
            @yield('styles')
        </style>

        <!-- End: Styles -->

    </head>
    <body class="antialiased">

        @include('_partials.navbar')
        <main>
            @yield('body')
        </main>
        @include('_partials.footer')

        <!-- Start: Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/lazysizes@4.0.1/lazysizes.min.js"></script>
        @include('_partials.scripts')
        @yield('scripts')
        <!-- End: Scripts -->

    </body>
</html>
