<?php
        // echo "<h1>" .$_POST['username']. "</h1> ";
        // echo "<h1>" .$_POST['password']. "</h1>";      

	include("../model/users_model.php");
	$user= new users_model();
  $usersMatrix = $user->get_users();
  // foreach($usersMatrix as $credentials){
  //   echo "<h1>" .$credentials['username_usr']. "</h1> ";
  //   echo "<h1>" .$credentials['password']. "</h1> ";
  // }
	include("../view/check_login.php");
  ?>
