<!DOCTYPE html>
<html>
    <head>
        @include('partials._header')
    </head>

    <body>

        @include('partials._nav')

            <div class="container">

                @include('partials._messages')

                @yield('content')

            </div>

        @include('partials._javascript')

        @yield('scripts')

    </body>
</html>
