<?php
session_start();
if(isset($_POST["submit"])){
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["level"] = $_POST["level"];
$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST["level"];
    
    $file = file_get_contents("JS/DB_JSON/Database/user.json");
    $code = json_decode($file);
    $qty = count($code);
    $qty_arr = $qty - 1;
    
for($i = 0 ; $i <= $qty_arr ; $i++){
    
    if($username == $code[$i]->username && $password == $code[$i]->password && $level == $code[$i]->level){
        
        if($level == "teacher"){
            header("location:JS/DB_JSON/teacher.php");
        }//teach
        elseif($level == "student"){
            header("location:/JS/DB_JSON/student.php");
        }//stu
        elseif($level == "admin"){
            header("location:JS/DB_JSON/admin.php");
            
        }
        break;
    }//if_login_check 
    else{
        //echo $username ."<br>";
        //echo $code[$i]->username;
        header("location:sorry.php");
        //echo "Level : " .$level."<br>";
        //echo "Username : ".$username."<br>";
        //echo "Password :".$password."<br>";
    }
    
}//for_$qty_arr
}//isset_submit
?>
<html>
<head>
<title>index</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<?php
require("JS/script.php");
?>

    <div class="nav-bar">
        <div class="left-logo">
            <img src="img/logo.png" alt="logo" />
        </div>
        <div class="title">
            <h1>Technological University (Mandalay)</h1>
            <h2>Department of Information Technology Engineering</h2>
        </div>
        <div class="right-logo">
            <img src="img/logo.png" alt="logo" />
        </div>
    </div>

    <div class="login-form">
        <h2>Log in</h2>
        <form action="" method="POST">
            <div class="username">
                <label>Username</label>
                <input type="text" name="username" id="username" class="form-control" />
            </div>
            <div class="password">
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="select-level">
                <select name="level" id="level" class="level">
                <option value="none">Level</option>
                <option value="student">Student</option><option value="teacher">Teacher</option><option value="admin">Admin</option>
                </select>
            </div>
            <div class="submit-btn">
                <input type="submit" onclick="login();" name="submit" id="submit" class="submit">
            </div>
        </form>
    </div>
    
</body> 

<!-- <input type="text" name="username" id="username" >

<input type="password" name="password" id="password">

<select name="level" id="level">
                <option value="none">Level</option>
                <option value="student">Student</option><option value="teacher">Teacher</option><option value="admin">Admin</option>
                </select>

<input type="submit" onclick="login();" name="submit" id="submit"> -->