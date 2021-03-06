<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register for BC Travel</title>
  <?php
    include ("metahead.inc");
  ?>
  <link rel="stylesheet" href="styles/registerPwd.css">
  <script src="scripts/registerValidation.js"></script>
</head>
<body>

  <div>
    <div class="container-fluid">
      <div class="col-sm-12" style="background-color:lavender;">BC Travel</div>
      <br/>
      <h2>Registration</h2>
      <hr/>

      <form id="formReg"> <!--Will have to add action=somethting.php-->

        <div class="form-group">
          <label for="firstname">First Name</label>
        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="firstname" pattern="^[a-zA-Z]+$" placeholder="Enter your first name (e.g John)" required="required"> <!--required-->
        </div>

        <br/>
        <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="lastname" pattern="^[a-zA-Z]+$" placeholder="Enter your last name (e.g Smith)" required="required"> <!--required-->
        </div>

        <br/>
        <div class="form-group">
          <label for="useremail">Email address</label>
          <input type="email" class="form-control" id="useremail" aria-describedby="emailHelp" placeholder="Enter email" required="required">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email address.</small>
        </div> <!--required-->

        <br/>
        <div class="form-group">
          <label for="pwd">Password</label>
          <input type="password" class="form-control" id="pwd" placeholder="Password" required="required">
        </div> <!--required and needs another field to reconfirm password-->


        <div id="message"> <!--PASSWORD VALIDATOR-->
          <h3>Password must contain the following:</h3>
          <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
          <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
          <p id="number" class="invalid">A <b>number</b></p>
          <p id="length" class="invalid">Minimum <b>8 characters</b></p>
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
</div>

<footer>
  <?php
    include ("footer.inc");
  ?>
</footer>

</body>
</html>
