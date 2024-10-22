
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <script src=" {{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <style>
      .my-btn-class{
        background-color: #FF5498;
            padding: 8px 30px;
            border-radius: 10px;
            color: white;
            box-shadow: 5px 5px 20px gray;

      }

    </style>
    
</head>
<body>
  @include('layout.header')
  <!--carousal start-->
  <div class="container bg-info">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner m-3">
        <div class="carousel-item active">
          <div class="row align-items-center">
            <div class="col-7">
              <h1>X-Box for your living room</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, dolorum.</p>
              <h2>$600</h2>
              <button class="btn btn-warning">click here</button>
            </div>
            <div class="col-5">
              <img src="{{asset('assets/image/headphone.png')}}" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-7">
              <h1>X-Box for your living room</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, dolorum.</p>
              <h2>$600</h2>
              <button></button>
            </div>
            <div class="col-5">
              <img src=" {{asset('assets/image/tv.png')}}" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-7">
              <h1>X-Box for your living room</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia, dolorum.</p>
              <h2>$600</h2>
            </div>
            <div class="col-5">
              <img src="{{asset('assets/image/xbox.png')}}" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!--carousal end-->

  

  <div class="container">

    <div class="row">
      <div class="col-3 m-3 px-7">
        <div class="card" style="width: 18rem;">
          <img src="image/shoe-1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary my-btn-class">Go somewhere</a>
          </div>
        </div>

      </div>

      <div class="col-3 m-3 px-7">
        <div class="card" style="width: 18rem;">
          <img src="image/shoe-2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary my-btn-class">Go somewhere</a>
          </div>
        </div>
      </div>
      
  <div class="col-3 m-3 px-7">
    <div class="card" style="width: 18rem;">
      <img src="image/shoe-1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary my-btn-class">Go somewhere</a>
      </div>
    </div>

  </div>

    </div>

  </div>

  <div class="container">
    <input type="text">
  </div>
  


</body>
</html>