<html>
<head>
  <title>Marvel API</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

  <style>
      h1, h2, h3, h4, h5, h6, p, .a, .navbar-brand, .btn {
  font-family: 'Source Sans Pro', sans-serif !important;
}

h1 {
  font-weight: 400 !important;
}

h2 {
  font-weight: 600 !important;
}

p {
  font-size: 18px !important;
  font-weight: 400 !important;
  color: #637381 !important;
}

.custom-button {
  background-color: #ff6255 !important;
  border-radius: 3px;
  border-color: #ff6255 !important;
  font-weight: 600 !important!;
}

.purple {
  background: linear-gradient(26deg,#5137AD, #6C4DCC 75%);
}

.text-inverse {
  color: #fff !important;
}

.full-page {
  min-height: calc(100vh - 40px);
}

.jumbotron {
  margin-top: 40px;
}

#team {
  position: relative;
}

.right {
  float: right;
}

.left {
  display: block;
  overflow: hidden;
}

#about {
  background: #e9ecef;
}

.imgAbout {
  width: 100%;
  height: 100%;
}
  </style>


</head>
<body>
    <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Marvel API</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#resources">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
  
    <div class="jumbotron jumbotron-fluid purple">
      <div class="container">
        <div class="row vertical-align-middle mt-5 mb-5">
          <div class="col-md-6">
            <h1 class="text-inverse">Marvel API Listing of characters</h1>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container full-page mt-5" id="resources">
      <div class="text-center mb-5">
        <h2>Characters<h2>
      </div>
      <div class="row d-flex justify-content-between">

       @foreach($characters as $c)
       @php 
            $imageSrc = $c['thumbnail']['path'];
            $imageExt = $c['thumbnail']['extension'];
        @endphp
        <div class="col-md-4 mb-4">
          <div class="card text-center">
            <img class="card-img-top" src="{{$imageSrc.'.'.$imageExt}}" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">{{ $c['name']}}</h4>
            </div>
          </div>
        </div>
        @endforeach

</body>
  
<footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</footer
</html>