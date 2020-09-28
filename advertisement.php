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
        <a class="navbar-brand" href="#">Book Store</a>
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
                    <a class="dropdown-item" href="logout.php">Logout</a>
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
<?php
 include("dbConnection.php");

 $query = "SELECT * FROM tbl_advertisement";
 $run= mysqli_query($con,$query);
 
 $x = "active";
    while($fetch = mysqli_fetch_assoc($run))
    { 
      ?>
    <div class="carousel-item <?php echo $x;?>">
    <img src="img/<?php echo $fetch['img_name'];?>" alt="Los Angeles" width="100%" height="500" />
  </div>    
<?php
$x = "";
}
?>

</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>


<hr>

    <div class="container mt-5 mb-4"> 
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8">
            <form action="uploadimg.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputPassword1">Discount</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="dis" placeholder="discount" required>
  </div>
  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="img" accept="image/*" required>
                                        <label class="custom-file-label" for="customFile">Add Photo</label>
                                    </div>
  <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
</form>
            </div>
            <div class="col-sm-2">

            </div>
            
        </div>





        <div class="row">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Image Id</th>
        <th>Delete</th>
       
      </tr>
    </thead>
    <tbody>
    <?php
    
    include("dbConnection.php");
    $query ="SELECT *FROM tbl_advertisement ";
    $run =mysqli_query($con,$query );
    while($fetch = mysqli_fetch_assoc($run)){?>
            <tr>
            <td> <?php  echo $fetch['img_id']?></td>
            

            <td><button>Delete</button></td>
            </tr>
            <?php
    }
   
    
    ?>


    </tbody>
  </table>
        </div>
    </div>

      
    

</body>

</html>