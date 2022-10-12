<?php
session_start();
if(isset($_GET['goback_admin_page'])){
    header("location:./admin.php");
}
if( !empty($_SESSION["addusername"]) && !empty($_SESSION['addpassword'])&& !empty($_SESSION['addlevel']) && $_SESSION['addlevel'] != "none"){
        echo "hello";
        $addusername = $_SESSION['addusername'];
        $addpassword = $_SESSION['addpassword'];
        $addlevel = $_SESSION['addlevel'];
        echo $addusername;
        echo $addpassword;
        echo $addlevel."<br><br><h1>";
        $file_get = file_get_contents("Database/user.json");//read_file
        
        $decode_file = json_decode($file_get);//decode_data
        $use_arr = count($decode_file) + 1;
        $decode_file[] = array("username"=> $addusername ,"password"=>$addpassword , "level"=>$addlevel, "id"=>$use_arr );//add_data
        
 
file_put_contents('Database/user.json',json_encode($decode_file));//save_file&encode
       
       session_destroy();
        //echo $decode_file[0]->username."</h1>";
        
        //function id_iterator(){
            //$addid = $qty_arr;
            
       // }
        //id_iterator();
       
       ?>
       
 <center>
 <br><br><br><h1>Success Add new User </h1><br><br><br>
 <form action='' method="get">
 <input type="submit" name="goback_admin_page" value="<< Go Back Admin Page " size="30"></center>  
 </form>    
       <?php
             
       } else{
           header("location:./admin.php"); 
           
       }
       
?>
