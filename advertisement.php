<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <!-- boostrap css  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- js and jquery  -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- external css  -->
    <link rel="stylesheet" href="style.css">

    <style>
        @media only screen and (min-width: 667px) {
            .dropdown-menu {
                left: -100px;
            }
        }
    </style>
</head>

<body>

    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="book.php">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="people.php">People</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="problem.php">Problem</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="advertisement.php">Advertisement</a>
                </li>
            </ul>
            <div class="dropdown">
                <img src="https://avatars2.githubusercontent.com/u/48873989?s=400&u=e84b2fdeb89ab044c8700c0ecffae801a26bedaa&v=4" width="30" height="30" class="rounded profilephoto my-2 my-sm-0  dropdown-toggle mr-5" alt="Cinque Terre" data-toggle="dropdown">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Name</a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </div>
    </nav>


    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/random" alt="Chicago" height="200" width="1080">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random" alt="Chicago" height="200" width="1080"  >
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random"  alt="New York" height="200" width="1080"  >
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="container">

        <div>
            <h3 class="badge badge-primary">image 1</h3>
            <div class="form-group">
                <input type="file" class="form-control-file border" name="file">
            </div>
            <button>submit</button>
        </div>
        <hr>

        <div>
            <h3 class="badge badge-primary">image 2</h3>
            <div class="form-group">
                <input type="file" class="form-control-file border" name="file">
            </div>
            <button>submit</button>
        </div>
        <hr>
        <div>
            <h3 class="badge badge-primary">image 2</h3>
            <div class="form-group">
                <input type="file" class="form-control-file border" name="file">
            </div>
            <button>submit</button>
        </div>
        <hr>

    </div>

</body>

</html>