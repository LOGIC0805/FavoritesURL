<?php
$usernm = $_POST["usernm"];
$passwd = $_POST["passwd"];

session_start();
$_SESSION['user'] = $usernm;

if($usernm == ''){
    echo "<script>alert('请输入用户名！');window.location.href='login.html'</script>";
}
if($passwd == ''){
    echo "<script>alert('请输入密码！');window.location.href='login.html'</script>";
}else{
    $servername = "localhost";
    $username = "root";
    $password = "cui,logic";
    $dbname = "urlusersdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT username FROM urlusers WHERE username = '$usernm'";
    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);
    if($num){
        $sql = "SELECT username, passwd FROM urlusers WHERE username = '$usernm' AND passwd = '$passwd'";
        $result = $conn->query($sql);
        $num2 = mysqli_num_rows($result);
        if ($num2) {
            echo "<script>alert('登录成功！');window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('密码错误！');window.location.href='login.html'</script>";
        }
    }else{
        echo "<script>alert('用户名不存在，请注册！');window.location.href='register.html'</script>";
    }
}
?>