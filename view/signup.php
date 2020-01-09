<?php
//session_start();
 include "../init.php";
include "../" . $layouts . 'header.php';
   if (!isset($_SESSION['token'])) {
 //    include "../" . $layouts . 'navbar.php';
?>

<div class="container">
  <h1 class="text-center">Create New Account</h1>
  <form class="form-horizontal" 
        action="../control/user/storeuser.php"
        method="POST">

              <!-- steart validity field -->
              <div class ="form-group">
          <label class ="control-label col-sm-2" name="validity" >user validity:</label>
          <select class ="col-sm-10">
            <option value="pharmacist" >phamrcist</option>
            <option value="coustomer">customer</option>
          </select>
          </div>

    <!-- start name field -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name">
      </div>
    </div>
    
    <!-- start email field -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>

    <!-- start password field -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Signup</button>
      </div>
    </div>
  </form>
  <div class="empty-div" style="height: 450px;"></div>
</div>

<?php
  } else {
    // redirect to user-statiscts page
     header('Location: signup.php');
  
  }
//   include "../" . $layouts . 'footer.php';
?>