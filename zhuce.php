<?php
//验证
if(empty($_POST["name"])){
    die('用户名不能为空');
}

if(strlen($_POST['pass']) < 6){
    die('密码不能小于6位');
}
if($_POST['pass'] !== $_POST['qpass']){
    die('两次输入的密码不一致');
}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    die('请输入有效的邮箱格式');
}
//保存数据
//对密码进行加密
$pass_hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$name = $_POST["name"];
$mail = $_POST['email'];


//链接数据库
$mysqli = new mysqli('localhost','pxa','pxapxa','shuju');
if($mysqli->connect_errno){
    die('数据库连接错误'. $mysqli->connect_error);
}

if(isset($_POST['reg'])){
    $sql = "INSERT INTO tuser (name, email, pass_hash) VALUES ('$name', '$mail', '$pass_hash')";
    $mysqli->query($sql);

    if($mysqli->affected_rows > 0){
        echo "<script>alert('注册成功，正在跳转登陆页面');window.location.href = 'denglu.html';</script>";
    }
}