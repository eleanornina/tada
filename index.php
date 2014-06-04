<?php include("includes/header.inc.php"); ?>
<body>

<div class="container">

          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
<div class="form-group">
            <button type="submit" class="btn btn-success">Sign in</button>
              </div>                
          </form>
</div>

<div class="jumbotron" id="loginCenter">
  <div class="container">
    
    <img src="img/textlogo-01.png">
    <form action="login.php">
      <fieldset>
        <input type="text" placeholder="username">
	    <input type="password" placeholder="password">
      <input type="password" placeholder="Confirm password">
                 
      <br><button id="creatSub" type="submit" class="btn btn-default">Create Account</button></fieldset>
    </form>
  </div>
  <?php include("includes/footer.inc.php"); ?>
</div><script type="text/javascript">
</script>
</body>
</html>
