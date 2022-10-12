<?php 
    session_start();
    if(isset($_POST["add"]) ){
        
//to-prevent-resubmit-when-refreshing
$_SESSION["addusername"] = $_POST["addusername"];
$_SESSION["addpassword"] = $_POST["addpassword"];
$_SESSION["addlevel"] = $_POST["addlevel"];
header("location:tempo_redir.php");
        
        } 
?> 

<html><head><title>Admin box</title>
<link rel="stylesheet" href="common.css">
<head> 
<body>
<?php
    
    $file_att = file_get_contents("Database/attendance.json");
    
    $file_tuto = file_get_contents("Database/user.json");
  
    $file = file_get_contents("Database/user.json");
    $decode = json_decode($file);
    //var_dump($decode);
    $count_arr = count($decode);
    
    $qty_arr = $count_arr - 1;
    
    $use_arr = $count_arr + 1 ;
    
?>
<center>
    <br><br><br>
    <h1>User Data</h1>
    
        <table>
            <tr>
                <th>
                    Username
                </th>
                <th>
                    Password
                </th> 
                <th>
                    Level
                </th> 
                <th>
                    Option
                </th>
            </table>
            
            <div class="scrollable_div" > <table class="innertable">
 <?php
 
  for($i = 0 ; $i <= $qty_arr ; $i++){
      
      echo "<tr><td>";
      
     echo $decode[$i]->username;   
     
      echo "</td><td>";
      
     echo $decode[$i]->password;
      echo "</td><td>";
      
     echo $decode[$i]->level;      
      echo "</td><td>";
      
     ?>
     
     [<a href="user_del.php?id=<?php $y = $decode[$i]->id; echo $y  ; ?>" class="del">DELETE</a>]
     
    [<a href="user_edit.php?id=<?php $y = $decode[$i]->id; echo $y  ; ?>" class="del">EDIT</a>]
      
<?php  } ?> 
</table>
</div>
<table>
      <form action="" method="post">
      <tr>
      <td><input type="text" name="addusername" size="5"></td>
      <td><input type="password" name="addpassword" size="5"></td>
      <td><select name="addlevel">
      <option value="none">LEVEL</option>
      <option value="student">Student</option>
      <option value="teacher">Teacher</option>
      <option value="admin">Admin</option>
      </select></td>
      <td><input type="submit" name="add" value="ADD"></td></tr></form>
         </table>
         
    <br><br><br>
    
    
   <h1>Student Data</h1>
       <select>
           <option>
               Major
           </option>
           <option>
           Civil Engineering
           </option>
           <option>
          Architecture
           </option>
       </select>
       <select>
           <option>
               Year
           </option>
       </select>
       <select>
           <option>
               Semester
           </option>
       </select>
   <br><br><br>
   
   <h1>Teacher Data</h1>
   <select>
           <option>
               Department
           </option>
           <option>
           Civil Engineering
           </option>
           <option>
          Architecture
           </option>
       </select>
       <select>
           <option>
               Rank
           </option>
           <option>
               Rector
           </option>
           <option>
               Professor
           </option>
           <option>
               Tutor
           </option>
       </select>
   <br><br><br>
   
   
   
   
   <h1>Course</h1>
     <select>
           <option>
               Major
           </option>
           <option>
           Civil Engineering
           </option>
           <option>
          Architecture
           </option>
       </select>
       <select>
           <option>
               Year
           </option>
       </select>
       <select>
           <option>
               Semester
           </option>
       </select>
   <br><br><br>
   
   <h1>Attendance<h1>
   
   <select>
           <option>
               Major
           </option>
           <option>
           Civil Engineering
           </option>
           <option>
          Architecture
           </option>
       </select>
       <select>
           <option>
               Year
           </option>
       </select>
       <select>
           <option>
               Semester
           </option>
       </select>
       <select>
           <option>
               Monthly
           </option>
           
       </select>
       <select>
           <option>
               Course
           </option>
       </select>
   <br><br><br>
   
   <h1>Tutorial Marks</h1>
   
   <select>
           <option>
               Major
           </option>
           <option>
           Civil Engineering
           </option>
           <option>
          Architecture
           </option>
       </select>
       <select>
           <option>
               Year
           </option>
       </select>
       <select>
           <option>
               Semester
           </option>
       </select>
       <select>
           <option>
               Time
           </option>
       </select>
       <select>
           <option>
               Course
           </option>
       </select>
   <br><br><br>
   
   <h1>Lab Marks</h1>
   <select>
           <option>
               Major
           </option>
           <option>
           Civil Engineering
           </option>
           <option>
          Architecture
           </option>
       </select>
       <select>
           <option>
               Year
           </option>
       </select>
       <select>
           <option>
               Semester
           </option>
       </select>
       <select>
           <option>
               Time
           </option>
       </select>
       <select>
           <option>
               Course
           </option>
       </select>
   <br><br><br>
   
   <h1>Assignment Marks</h1>
   
   <select>
           <option>
               Major
           </option>
           <option>
           Civil Engineering
           </option>
           <option>
          Architecture
           </option>
       </select>
       <select>
           <option>
               Year
           </option>
       </select>
       <select>
           <option>
               Semester
           </option>
       </select>
       <select>
           <option>
               Time
           </option>
       </select>
       <select>
           <option>
               Course
           </option>
       </select>
   <br><br><br>
   
   <h1>Exam Marks</h1>
   
   <select>
           <option>
               Major
           </option>
           <option>
           Civil Engineering
           </option>
           <option>
          Architecture
           </option>
       </select>
       <select>
           <option>
               Year
           </option>
       </select>
       <select>
           <option>
               Semester
           </option>
       </select>
       <select>
           <option>
               Course
           </option>
       </select>
       
   <br><br><br>
   
   
   
    <?php
    
    ?>
</center> 





