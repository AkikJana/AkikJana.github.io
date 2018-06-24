<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="cup.css">

    <title>World Cup</title>
  </head>
  <body>
    <!--this is the top navigation-->
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand " href="#"><img src="http://placehold.it/75x75" alt="..." class="rounded-circle"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active text-light font-weight-bold" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-light font-weight-bold" href="#">Upcoming matches</a>
      <a class="nav-item nav-link text-light font-weight-bold" href="#">Previous Matches</a>
      
    </div>
  </div>
</nav>
<div>
  <!--carousel-->
<div class="row-carousel-holder padding:10px">
 
<div id="carouselExampleIndicators" class="carousel slide m-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://placehold.it/600x200" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://placehold.it/600x200" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://placehold.it/600x200" alt="Third slide">
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
<div>

    <!--the chart starts here
    <div class="container">
      <table class="table table-sm table-condensed table-striped >
  <thead class="thead-dark">
    <tr>
      <th scope="col-sm" class="col-md-1">Rank</th>
      <th scope="col-sm" class="col-md-1">First</th>
      <th scope="col-sm" class="col-md-1">Last</th>
      <th scope="col-sm" class="col-md-1">Flag</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td >Otto</td>
      <th scope="col"><img src="http://placehold.it/30x30" alt="..." class="rounded"></th>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <th scope="col"><img src="http://placehold.it/30x30" alt="..." class="rounded"></th>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <th scope="col"><img src="http://placehold.it/30x30" alt="..." class="rounded"></th>
    </tr>
  </tbody>
</table>
-->
<!--using a table for the chart-->
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Argentina
    <span class="badge badge-primary badge-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Iceland
      <span class="badge badge-primary badge-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Croatia
    <span class="badge badge-primary badge-pill">1</span>
  </li>
</ul>



    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>