<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Assignment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url ('/') }}">Vacation Rentals</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url ('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('req?name=mohamed')}}">Parameter</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{url('myinfo')}}" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Info
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url ('/myinfo/name')}}">Name</a>
                            <a class="dropdown-item" href="{{ url ('/myinfo/age')}}">Age</a>
                            <a class="dropdown-item" href="{{ url ('/myinfo/faculty')}}">Faculty</a>
                            <a class="dropdown-item" href="{{ url ('/myinfo/university')}}">University</a>
                            <a class="dropdown-item" href="{{ url ('/myinfo/request')}}">Dump the array data</a>
                            <a class="dropdown-item" href="{{ url ('/myinfo/error')}}">Not Found</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('myinfo')}}">My Info</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid " src="images/hotelsbg.jpeg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="h1">Best Vacation Rental</h1>
                        <button class="btn btn-info">Buy</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="images/hotelsbg.jpeg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="h1">Second slide</h1>
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid " src="images/hotelsbg.jpeg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="h1">Third slide</h1>
                        <button class="btn btn-secondary">Buy</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="images/avatar.png" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-secondary">Button</button>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="images/avatar.png" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-primary">Button</button>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="images/avatar.png" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-danger float-right">Button</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="images/avatar.png" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-secondary">Button</button>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="images/avatar.png" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-primary">Button</button>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <img class="img-thumbnail rounded-circle" src="images/avatar.png" alt="Avatar">
                <h3 class="text-center">Text Title</h3>
                <p class=" text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <button class="btn btn-danger float-right">Button</button>
            </div>
        </div>
    </div>
    <footer class="bg-dark mt-3">
        <div class="container text-white p-2">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 pt-2">
                    <p class="text-left pt-1">2021 ©</p>
                </div>
                <div class="col-12 col-md-4 col-lg-4 text-center pt-1">
                    <button type="button" class="btn btn-primary btn-sm">About</button>
                    <button type="button" class="btn btn-secondary btn-sm">Support</button>
                    <button type="button" class="btn btn-success btn-sm">Privacy Policesss</button>
                </div>
                <div class="col-12 col-md-4 col-lg-4 text-right pt-1">
                    <a class="navbar-brand text-right" href="#">Vacation Rentals</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="js/code.js"></script>
</body>

</html>