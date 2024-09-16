<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Blog Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('blogs/blog.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container">
        @include('layouts.partials.blogs.header')

        <div class="nav-scroller py-1 mb-2">
            @include('layouts.partials.blogs.categories')
        </div>
    </div>

    <main class="container">

        <div class="row g-5">
            <div class="col-md-12">

                @yield('content')

                @include('layouts.partials.blogs.pagination')

            </div>

        </div>

    </main>


    @include('layouts.partials.blogs.footer')


</body>

</html>