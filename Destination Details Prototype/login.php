<!DOCTYPE html>
<html lang="en">
<head>
  <title>BC Travel Login</title>
  <?php
    include ("metahead.inc");
  ?>
</head>
<body>

<div class="container-fluid">

  <div class="col-sm-12" style="background-color:lavender;">BC Travel</div>
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
