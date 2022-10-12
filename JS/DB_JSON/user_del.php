<?php
session_start();
  $id = $_GET['id'];
  if(isset($_GET['goback_admin'])){
    header("location:./admin.php");
}
?>
<html><head><title></title><body>
<br><br><center>
<?php 
  echo "<h1>Successfully delete user_id : " .$id. "</h1>";
?>
<br><br>


<?php 
$data = file_get_contents('Database/user.json'); 

$json_arr = json_decode($data, true); 

$arr_index = array(); 

foreach ($json_arr as $key => $value) { 

if ($value['id'] == $id) { 
$arr_index[] = $key; } 

} 

foreach ($arr_index as $i) { unset($json_arr[$i]); } 
 

$json_arr = array_values($json_arr); 

 file_put_contents('Database/user.json', json_encode($json_arr)); ?>
 
  
<br><br>
<a href="admin.php"> Go back Admin Page </a>
</center>
</body>
</html>
