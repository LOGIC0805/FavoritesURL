<?php
$usernm = $_POST["usernm"];
$passwd = $_POST["passwd"];
$passwd2 = $_POST["passwd2"];

if($usernm == ''){
    echo "<script>alert('请输入用户名！');window.location.href='register.html'</script>";
}
if($passwd == ''){
    echo "<script>alert('请输入密码！');window.location.href='register.html'</script>";
}
if($passwd != $passwd2){
    echo "<script>alert('两次密码输入不一致！');window.location.href='register.html'</script>";
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
        echo "<script>alert('用户名已存在！');window.location.href='register.html'</script>";
    }else{
        $sql = "INSERT INTO urlusers (username, passwd)
        VALUES ('$usernm', '$passwd')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('注册成功，欢迎登录！');window.location.href='login.html'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>