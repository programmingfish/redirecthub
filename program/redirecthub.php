<?php
//it will go so fast that the user will only see a glimp of it!
  echo "Welcome to redirect hub";
  //or change to POST to GET

  	$input = $_POST["your var"];

  //key = a var that will show the program wich direction it should take. Example: key = login => the programs knows login redirect
  	$key = $_POST["your key"];
		
  //array section
  	$login = array("login", "adminlogin", "add yours", "...");
    $register = array("register","new user" , "...");

 //check the input
if(in_array($key, $login)){
    //database code for login stuff
    //get the stuff from the database
    
    if(/*check input to other stuff*/){
        //return true
        //post the important stuff to make sure the user can use the page
        header('Location: home.php');
    }else{
        //return false
        //redirect back to other page
    }
    header('Location: login.php');
}if(in_array($key, $register)){
    //database register code here
}if(in_array($key, $something)){
    //other code for checking other things
}else{
    echo "Error";
}
?>