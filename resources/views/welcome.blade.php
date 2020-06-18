<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

{{--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <header>
                    <nav>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>

                    </nav>
                </header>
            </div>
        </div>
{{--        carousel--}}
        <div class="row">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://p1.pxfuel.com/preview/42/190/499/water-nature-lake-mountain-travel-landscapes-beautiful.jpg" class="d-block w-100" alt="prueba1">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="prueba 2">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="prueba 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
