<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,300&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <title>Chef Smalls</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-darker fixed-top">
        <a class="navbar-brand" href="#">Chef Smalls</a>
        <button class="navbar-toggler" type="button" data-toggle=   "collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Productos</a>
                <a class="nav-item nav-link" href="#">Contacto</a>
            </div>
        </div>
    </nav>
</header>

<section>
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1600x900/?nature,water" class="d-block w-100" alt="Random">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Una gran comida comienza con sus ingredientes</h5>
                        <p>Siempre usamos ingredientes de alta calidad y duración.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/user/erondu/1600x900" class="d-block w-100" alt="Random 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/collection/190727/1600x900" class="d-block w-100"
                         alt="Random 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section class="bg-image d-flex py-5">
    <div class="container align-self-center mb-3">
        <h2 class="font-weight-bold text-white text-center">Te consentimos</h2>
        <p class="text-white text-center w-75 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at delectus
            deserunt dignissimos dolore et illum ipsum itaque labore laboriosam, nesciunt obcaecati officiis omnis,
            quaerat quibusdam sint tempora vel voluptatem.
        </p>
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card m-0 p-0">
                    <div class="card-header p-0 m-0">
                        <img src="https://source.unsplash.com/user/erondu/500x600" alt="testing"
                             class="img-fluid img-top-rounded">
                    </div>
                    <div class="card-body card-border-button-rounded w-100 px-2 bg-dark">
                        <h5 class="text-white lead">Grandes mezclas</h5>
                        <small class="text-white text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae
                            commodi
                            cum delectus deserunt ea fugiat incidunt.</small>
                        <div class="mt-3">
                            <p class="text-white text-center">Comparte</p>
                            <div class="d-inline">
                                <small class="text-white mr-2">
                                    <i class="icon ion-logo-facebook lead mr-2"></i>/ChefSmall
                                </small>

                                <small class="text-white mr-2">
                                    <i class="icon ion-logo-instagram lead mr-2"></i>/ChefSmall
                                </small>
                                <small class="text-white">
                                    <i class="icon ion-logo-twitter lead mr-2"></i>@ChefSmall
                                </small>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-0 p-0">
                    <div class="card-header p-0 m-0">
                        <img src="https://source.unsplash.com/user/erondu/500x600" alt="testing"
                             class="img-fluid img-top-rounded">
                    </div>
                    <div class="card-body card-border-button-rounded w-100 px-2 bg-dark">
                        <h5 class="text-white lead">Grandes mezclas</h5>
                        <small class="text-white text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae
                            commodi
                            cum delectus deserunt ea fugiat incidunt.</small>
                        <div class="mt-3">
                            <p class="text-white text-center">Comparte</p>
                            <div class="d-inline">
                                <small class="text-white mr-2">
                                    <i class="icon ion-logo-facebook lead mr-2"></i>/ChefSmall
                                </small>

                                <small class="text-white mr-2">
                                    <i class="icon ion-logo-instagram lead mr-2"></i>/ChefSmall
                                </small>
                                <small class="text-white">
                                    <i class="icon ion-logo-twitter lead mr-2"></i>@ChefSmall
                                </small>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-0 p-0">
                    <div class="card-header p-0 m-0">
                        <img src="https://source.unsplash.com/user/erondu/500x600" alt="testing"
                             class="img-fluid img-top-rounded">
                    </div>
                    <div class="card-body card-border-button-rounded w-100 px-2 bg-dark">
                        <h5 class="text-white lead">Grandes mezclas</h5>
                        <small class="text-white text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae
                            commodi
                            cum delectus deserunt ea fugiat incidunt.</small>
                        <div class="mt-3">
                            <p class="text-white text-center">Comparte</p>
                            <div class="d-inline">
                                <small class="text-white mr-2">
                                    <i class="icon ion-logo-facebook lead mr-2"></i>/ChefSmall
                                </small>

                                <small class="text-white mr-2">
                                    <i class="icon ion-logo-instagram lead mr-2"></i>/ChefSmall
                                </small>
                                <small class="text-white">
                                    <i class="icon ion-logo-twitter lead mr-2"></i>@ChefSmall
                                </small>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


</section>

<section class=" py-5 bg-darker d-flex">
    <div class="card bg-x shadow w-75 align-self-center mx-auto">
        <div class="card-body">
            <form action="{{ route('comment.store') }}" method="post">
                @csrf
                <div class="form-row container col-md-12">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="number" class="form-control" name="telephone"  placeholder="Telephone">
                    </div>
                </div>
                <div class="form-row container col-md-12">
                    <textarea placeholder="comment" class="form-control" name="comment" id="comment" cols="30" rows="5"></textarea>
                </div>
                <div class="form-row container col-md-12 mt-4">
                    <div class="form-group col-md-3">
                        <input type="submit" value="Enviar" class="text-white btn btn-special w-100">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

</body>
</html>
