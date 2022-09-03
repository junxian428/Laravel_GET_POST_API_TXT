<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Multiple Users Chat</title>
  </head>
  <div class="col-sm-12" style="background-size: cover; background-color: pink;">
  <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#" style="font-family:Lucida Handwriting;">Multiple Users Chat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">


    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="#">Category</a>
          <a class="dropdown-item" href="#">Product</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Message</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link">Contact Us</a>
      </li>
      <form style="margin-left:500px;">
      <input type="search" placeholder="Search" aria-label="Search" style="display:inline;">
      <button class="btn btn-outline-success" type="submit" style="display:inline;">Search</button>
    </form>
      <li class="nav-item">
        <a class="link" href="#" >Login</a>
      </li>
      <li class="nav-item">
        <a class="link" href="#" style="margin-left: 30px">Register</a>
      </li>
    </ul>

  </div>
  </div>

</nav>
<div class="container-fluid">

@yield('content')
    <div class="row" style="background-color: pink;">
          <div class="col-md-4" style="margin-top: 20px;">
            <Strong>who we are?</Strong><br>
            We are selling mobile phone and computer to students with reasonable price. <br><br>&copy;copyright <strong>Multiple Users Chat</strong>. All Rights Reserved
          </div>
          <div class="col-md-4"  style="margin-top: 20px;">
            <strong>Categories</strong><br>
            <a href="phone.html">Phone</a><br>
            <a href="computer.html">Computer</a>
          </div>
          <div class="col-md-4"  style="margin-top: 20px;">
            <a style="margin:20px" href="https://www.facebook.com"><img src="{{asset('images/facebook.png')}}" width="50" alt="">
            </a>
            <a style="margin:20px" href="https://www.instagram.com"><img src="{{asset('images/instagram.png')}}" width="50" alt="">
            </a>
            <a style="margin:20px" href="https://wa.link/27fznx"><img src="{{asset('images/whatsapp.png')}}" width="50" alt="">
            </a>     
        
    </div>


</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</html>
