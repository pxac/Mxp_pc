<?php
//链接数据库
$mysqli = new mysqli('localhost','pxa','pxapxa','shuju');
if($mysqli->connect_errno){
    die('数据库连接错误'. $mysqli->connect_error);
}
//保存数据
$pass_hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$name = $_POST["name"];

if(isset($_POST['login'])){
    $sql = "SELECT pass_hash FROM tuser WHERE name='$name'";
    $res = $mysqli->query($sql)->fetch_assoc();

    if($res){
        if(password_verify($_POST['pass'],$res['pass_hash'])){
            // 保存用户名到会话中
            session_start();
            $_SESSION['username'] = $name;
            echo "<script>window.location.href='index.php';</script>";
            echo "<script>window.location.href='cart.php';</script>";
        }else{
            echo "<script>alert('密码不正确');history.go(-1);</script>";
        }
    }else{
        echo "<script>alert('用户不存在');history.go(-1);</script>";
    }
}
