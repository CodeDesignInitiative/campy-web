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
        @yield('meta')
        <!-- End: Other meta -->

        <!-- Start: Styles -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
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
        <script>
        !function(e,n,t,r){
            function o(){try{var e;if((e="string"==typeof this.response?JSON.parse(this.response):this.response).url){var t=n.getElementsByTagName("script")[0],r=n.createElement("script");r.async=!0,r.src=e.url,t.parentNode.insertBefore(r,t)}}catch(e){}}var s,p,a,i=[],c=[];e[t]={init:function(){s=arguments;var e={then:function(n){return c.push({type:"t",next:n}),e},catch:function(n){return c.push({type:"c",next:n}),e}};return e},on:function(){i.push(arguments)},render:function(){p=arguments},destroy:function(){a=arguments}},e.__onWebMessengerHostReady__=function(n){if(delete e.__onWebMessengerHostReady__,e[t]=n,s)for(var r=n.init.apply(n,s),o=0;o<c.length;o++){var u=c[o];r="t"===u.type?r.then(u.next):r.catch(u.next)}p&&n.render.apply(n,p),a&&n.destroy.apply(n,a);for(o=0;o<i.length;o++)n.on.apply(n,i[o])};var u=new XMLHttpRequest;u.addEventListener("load",o),u.open("GET","https://"+r+".webloader.smooch.io/",!0),u.responseType="json",u.send()
        }(window,document,"Smooch","596dbeee3154052401f51a2c");
    </script>
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
        <script>
        Smooch.init({
            appId: '596dbeee3154052401f51a2c',
            locale: 'de-DE',
            customText: {
                headerText: 'Wie können wir helfen?',
                inputPlaceholder: 'Schreib uns…',
                introAppText: 'Schreib uns hier oder auf Facebook.',
                introductionText: 'Wir helfen dir bei allen Fragen zur und Problemen mit der Camp-Anmeldung.',
                sendButtonText: 'Abschicken'
            }
        }).then(function() {
            // Your code after init is complete
        });
        </script>
        <!-- End: Scripts -->

    </body>
</html>
