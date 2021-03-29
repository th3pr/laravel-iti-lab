<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <title>My Info</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url ('/') }}">Vacation Rentals</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="{{url('myinfo')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        </div>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="list-group">
                <ul>
                    <li><a href="/myinfo/name">My Name</a></li>
                    <li><a href="/myinfo/age">My Age</a></li>
                    <li><a href="/myinfo/faculty">My Faculty</a></li>
                    <li><a href="/myinfo/university">My University</a></li>
                    <li><a href="/myinfo/request">Dump the array data</a></li>
                    <li><a href="/myinfo/error">Not Found</a></li>
                </ul>
            </div>
        </div>
    </div>

    <footer class="bg-dark mt-3">
        <div class="container-fluid mt-5">
            <div class="card mx-5">
                <div class="row mb-4 ">
                    <div class="col-md-4 col-sm-11 col-xs-11">
                        <div class="footer-text pull-left">
                            <div class="d-flex">
                                <h1 class="font-weight-bold mr-2 px-3" style="color:#16151a; background-color:#957bda"> B </h1>
                                <h1 style="color: #957bda">rmja Tech</h1>
                            </div>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi non pariatur numquam animi nam at impedit odit nisi.</p>
                            <div class="social mt-2 mb-3"> <i class="fa fa-facebook-official fa-lg"></i> <i class="fa fa-instagram fa-lg"></i> <i class="fa fa-twitter fa-lg"></i> <i class="fa fa-linkedin-square fa-lg"></i> <i class="fa fa-facebook"></i> </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <h5 class="heading">Services</h5>
                        <ul>
                            <li>IT Consulting -</li>
                            <li>Development</li>
                            <li>Cloud</li>
                            <li>DevOps & Support</li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <h5 class="heading">Industries</h5>
                        <ul class="card-text">
                            <li>Finance</li>
                            <li>Public Sector</li>
                            <li>Smart Office</li>
                            <li>Retail</li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <h5 class="heading">Company</h5>
                        <ul class="card-text">
                            <li>About Us</li>
                            <li>Blog</li>
                            <li>Contact</li>
                            <li>Join Us</li>
                        </ul>
                    </div>
                </div>
                <div class="divider mb-4"> </div>
                <div class="row" style="font-size:10px;">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="pull-left">
                            <p><i class="fa fa-copyright"></i> 2021 ITI</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="pull-right mr-4 d-flex policy">
                            <div>Terms of Use</div>
                            <div>Privacy Policy</div>
                            <div>Cookie Policy</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>