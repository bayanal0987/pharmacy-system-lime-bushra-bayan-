<?php
  //session_start();
  include "../init.php";
  include "../" . $layouts . 'header.php';
   // start enter info medicine
  if (!isset($_SESSION['token'])) {
    include "../" . $layouts . 'navbar.php';
?>
<div class="container">
  <h3 class="text-center">delete medicine</h3>
  <form class="form-horizontal"
        action="../control/medicine/deletemed.php"
        method="POST">

        <!-- enter medicine name -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"> enter Medicine name you want deleted:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter medicine name" name="name">
      </div>
    </div>
    </div>
<?php } else { 
  header('Location: index.php');
} ?>