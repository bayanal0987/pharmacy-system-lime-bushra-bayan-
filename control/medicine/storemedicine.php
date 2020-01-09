<?php 
	// include functions 
	include "../functions.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		// get values from pharmacist
		 $name     = $_POST['name'];
		$comany    = $_POST['namec'];
        $active = $_POST['mater'];
        $price =$_POST['price'];
        $expiry =$_POST['expiry'];

		// echo $name . '  '. $comany . '  '. $active.''.$price.''.expiry;

		// init Files
		$med_file = fopen("../../data\\medicines.txt", "a") or die("Unable to open file!");

		// store medicin in file
		$id    = rand(1,10000);
		$med  = array("id" => $id , "name"=>$name , "namec"=>$comany, "mater" => $active,"price" =>$price,"expiry"=>$expiry);
		$medJSON = json_encode($med);
		fwrite($med_file, $medJSON.'|');

		// redirect to index.php 
		header('Location:../../view/index.php');
	}
?>