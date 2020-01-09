<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="">ONLINE PHARMACY</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['token'])) { ?>
        <li><a href=""><span class="glyphicon glyphicon-log-out">vvvv</a></li>
        <?php } else { ?>
          <li><a href="../view/signup.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
          <li><a href="../view/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>