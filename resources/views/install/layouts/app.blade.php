<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">

    <title>@yield('pageTitle') &mdash; Bookkeeper</title>

    <meta name="msapplication-config" content="{{ Theme::url('browserconfig.xml') }}">
    <link rel="manifest" href="{{ Theme::url('site.webmanifest') }}">
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">
    <link rel="icon" sizes="32x32 16x16" href="{{ Theme::url('favicon.ico') }}">
    <link rel="mask-icon" color="#263a8a" href="{{ Theme::url('safari-pinned-tab.svg') }}">

    <!-- Styles -->
    {!! Theme::css('css/app.css') !!}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    @yield('styles')

</head>
<body>

    <section class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="install has-text-centered">
                    {!! Theme::img('img/bookkeeper-logo-bg.svg', 'Bookkeeper Logo', 'install__logo') !!}

                    @include('partials.progress')

                    <h1 class="is-size-2">@yield('pageTitle')</h1>

                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    {!! Theme::js('js/app.js') !!}

    @stack('scripts')

</body>
</html>
