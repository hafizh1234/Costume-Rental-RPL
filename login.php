<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script src="myScript.js"></script>
    <title>CORET - Login</title>

  </head>
  <body>
  <!--Navigasi-->
  <header>
  <div class="topnav" id="myTopnav">
    <a class="nav-item nav-link" href="index.php">INI LOGO</a>
    <a class="nav-item nav-link" href="index.php">Home</a>
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catalog</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Show Costume</a>
      <a class="dropdown-item" href="#">Modern Dance Costume</a>
      <a class="dropdown-item" href="#">Traditional Dance Costume</a>
      <a class="dropdown-item" href="#">Graduation Costume</a>
    </div>
    </a>
      <a class="nav-item nav-link" href="#">Contact</a>
      <a class="nav-item nav-link" href="#">About</a>
      <a class="nav-item nav-link active" href="#" id="floatLogin">Login</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
  </header>
  <!--End Navigasi-->
    <div class="container-fluid">
    <div class="container">
      <h1 class="text-center" id="title" style="color: #4CAF50">Costume Rental</h1>
       <p class="text-center">
        <small id="passwordHelpInline" class="text-muted"> 
          For your event needs.
        </small>
      </p>
      <hr>
      <div class="row">
        <div class="col-md-5">
          <h2 style="color: #4CAF50">Sign Up! </h2>
              <div class="form-group">
                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Re-enter Password">
              </div>
              <p id="notSimilar"></p>
              <script>
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("password2").value;
                if(password != confirmPassword){
                document.getElementById("notSimilar").innerHTML = "Password not similar";
              }
              </script>
              <div>
                <button type="submit">Sign Up</button>
              </div>
        </div>
        
        <div class="col-md-2">
          <!-------null------>
        </div>
        
        <div class="col-md-5">
            <form role="form">
            <fieldset>              
              <h2 style="color: #4CAF50">Login </h2>
              <div class="form-group">
                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              </div>
              <div>
                <button type="Submit">Login</button>
              </div>
                 
            </fieldset>
        </form> 
        </div>
      </div>
    </div>
  </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>