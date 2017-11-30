<!DOCTYPE html>
<html lang="en">
<head>
  <title>BCTravelNeo Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">

  <div class="col-sm-12" style="background-color:lavender;">BCTravelNeo</div>
  <br/>


  <div>
    <h2>Login</h2>
    <hr/>
    <div class="row">
       <div class="col-sm-4 offset-sm-4 text-center">
          <form>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="pwd">Password</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter Password">
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
      </div>

    </div>
  </div>

</div>

<footer>
  <?php
    include ("footer.inc");
  ?>
</footer>

</body>
</html>
