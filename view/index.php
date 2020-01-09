<?php
  //session_start();
  include "../init.php";
 
  include "../" . $layouts . 'header.php';
  if (!isset($_SESSION['token'])) {
    include "../" . $layouts . 'navbar.php';
?>
<div class="cover">
  <div class="cover-in"> 
   </div>
</div>

<!-- start slogin div -->
<div class="slogin">
	<div class="slogin-in text-center">
		<p>The central pharmacy online</p>
	</div>
</div>
<!-- end slogin div -->

<!-- start add medicine -->
<div class="design">        
      <div class="col-sm-offset-2 col-md-3">
      <button onclick="location.href = 'addmedicine.php';" id="myButton" class="float-left submit-button" >Add medicine</button>
      </div>
       <!-- end add medicine -->

      <!-- start delete medicine -->
      <div class="design">        
      <div class="col-sm-offset-2 col-md-3">
      <button onclick="location.href = 'deletemedicine.php';" id="myButton" class="float-left submit-button" >Delete medicine</button>
      </div>
       <!-- end delete medicine -->
       <div class="design">        
      <div class="col-sm-offset-2 col-md-3">
      <button onclick="location.href = 'deletemedicine.php';" id="myButton" class="float-left submit-button" >Delete medicine</button>
      </div>

    </div>
  <?php } else {
    header('Location: st.php');
  }?>


