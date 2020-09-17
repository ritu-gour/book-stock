<?php


$user = $_SESSION['umob1'];
$name = $_SESSION['name'];
$role= $_SESSION['role1'];
$shop_id=$_SESSION['shop_id'];
echo $shop_id;
echo $user;
echo $name;
// echo $role;


?>

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
        /* .pagination {
            padding-left: 280px;
        } */

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
               
                   <button type="button" class="btn btn-primary text-left"data-toggle="modal" 
                   data-target="#exampleModal">addproduct</button>
                    
                   </li>
                      

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> 
    </li>
                <li class="nav-item">
                    <a class="nav-link" href="people.php">People</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="advertisement.php">Advertisement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="problem.php">Problem</a>
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

    <div class="alert alert-warning" role="alert">
        <div class="d-flex  justify-content-between">
            <div>Total Book</div>
            <div>Total Category</div>
        </div>
    </div>

    <div class="input-group mb-3 col-sm-12">
        <input type="text" class="form-control" placeholder="Enter Book Name/Book Id" id="search_text" name="search">
        <div class="input-group-append">
            <button class="btn btn-success" type="submit" name="submit">Go</button>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <h2 class="badge badge-secondary">All Books</h2>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Filter Page</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Select</option>
                <option>10</option>
                <option>30</option>
                <option>50</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>

        <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>ISBN</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Discount</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://avatars2.githubusercontent.com/u/48873989?s=400&u=e84b2fdeb89ab044c8700c0ecffae801a26bedaa&v=4" width="30" height="30"" alt=""></td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>ISBN12</td>
                        <td>Class 12</td>
                        <td>121</td>
                        <td class=" badge badge-success">11</td>
                        <td>12%</td>
                        <td><button>Delete</button></td>
                        <td><button>Update</button></td>
                    </tr>
                    <tr>
                        <td><img src="https://avatars2.githubusercontent.com/u/48873989?s=400&u=e84b2fdeb89ab044c8700c0ecffae801a26bedaa&v=4" width="30" height="30"" alt=""></td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>ISBN12</td>
                        <td>Class 12</td>
                        <td>121</td>
                        <td class=" badge badge-danger">3</td>
                        <td>12%</td>
                        <td><button>Delete</button></td>
                        <td><button>Update</button></td>
                    </tr>
                    <tr>
                        <td><img src="https://avatars2.githubusercontent.com/u/48873989?s=400&u=e84b2fdeb89ab044c8700c0ecffae801a26bedaa&v=4" width="30" height="30"" alt=""></td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>ISBN12</td>
                        <td>Class 12</td>
                        <td>121</td>
                        <td class=" badge badge-primary">6</td>
                        <td>12%</td>
                        <td><button>Delete</button></td>
                        <td><button>Update</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>


</body>

</html>