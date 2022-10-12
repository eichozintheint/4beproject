<?php
session_start();
  $id = $_GET['id'];
  
?>
<html><head><title></title></head><body>
<br><br><center>
<br><br><br>
<form action="" method="post">
<table>
<tr><th>Username</th>
<td><input type="text" name="username"></td></tr>
<tr><th>Password</th><td><input type="password" name="password"></td></tr>
<tr><th>Level</th><td><input type="level" name="level" ></td></tr>
<tr><th>Confirm</th><td><input type="submit" name="submit"></td></td>
</table>
</form>

<?php 
  echo "<br><br>user_id : " .$id."<br><br>"; ?>
  <?php 
  
  $data = file_get_contents('Database/user.json'); 
  
  $json_arr = json_decode($data, true); foreach ($json_arr as $key => $value) { 
  if(isset($_POST["submit"])){
  if ($value['id'] == $id) { $json_arr[$key]['username'] = $_POST["username"]; 
  
  $json_arr[$key]['password'] = $_POST["password"]; 
  
  $json_arr[$key]['level'] = $_POST["level"]; 
  
  } } 
  
  file_put_contents('Database/user.json', json_encode($json_arr)); 
  }
?>
<br><br>
<a href="admin.php"> Go back Admin Page </a>
</center>
</body>
</html>
