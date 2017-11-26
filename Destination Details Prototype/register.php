<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register for BCTravelNeo</title>
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
  <h2>Registration</h2>
  <hr/>

  <form id="formReg">

  <div class="form-group">
    <label for="firstname">First Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="firstname" pattern="^[a-zA-Z]+$" placeholder="Enter your first name (e.g John)">
  </div>

  <br/>
  <div class="form-group">
  <label for="lastname">Last Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="lastname" pattern="^[a-zA-Z]+$" placeholder="Enter your last name (e.g Smith)">
  </div>

  <br/>
  <div class="form-group">
    <label for="useremail">Email address</label>
    <input type="email" class="form-control" id="useremail" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email address.</small>
  </div>

  <br/>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="pwd" placeholder="Password">
  </div>

  <br/>
  <div class="form-group">
    <label for="legit">Legitimate Identification</label>
    <input type="file" class="form-control-file" id="legit" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Please insert any copy of identification for verification puruposes. We'll never share your ID.....</small>
  </div>

  <br/>
  <fieldset class="form-group">
    <legend><h6 class="font-weight-normal">Gender</h6></legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" id="male" value="option1" checked> Male
      </label>
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="gender" id="female" value="option2"> Female
      </label>
    </div>
  </fieldset>

  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      I would like to receive newsletters and offers
    </label>
  </div>

  <br/>
  <button type="submit" class="btn btn-success">Submit</button>
  <button type="reset" class="btn btn-danger">Reset</button>
</form>
</div>

<footer>
  <?php
    include ("footer.inc");
  ?>
</footer>

</body>
</html>