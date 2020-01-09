<?php
  //session_start();
  include "../init.php";
  include "../" . $layouts . 'header.php';
   // start enter info medicine
  if (!isset($_SESSION['token'])) {
    include "../" . $layouts . 'navbar.php';
?>
<div class="container">
  <h3 class="text-center">Add new medicine</h3>
  <form class="form-horizontal"
        action="../control/medicine/storemedicine.php"
        method="POST">

        <!-- enter medicine name -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Medicine name :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter medicine name" name="name">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="namec">Company name :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="namec" placeholder="Enter company name" name="namec">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="mater">active material :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mater" placeholder="Enter the active material" name="name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="price">price :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="price" placeholder="Enter medicine price" name="price">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="expiry">expiry :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="expiry" placeholder="Enter medicine expiry" name="expiry">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-danger">Save</button>
      </div>
    </div>
    <div class="empty-div" style="height: 450px;"></div>  
</div>
<?php } else { 
  header('Location: index.php');
} ?>
