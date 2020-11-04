<?php
$url = $_POST["url"];
$urlName = $_POST["urlName"];
$urlLable = $_POST["urlLable"];
$urlComment = $_POST["urlComment"];

session_start();
$usernm = $_SESSION['user'];

if($url == ''){
    echo "<script>alert('请输入URL！');window.location.href='add.html'</script>";
}
if($urlName == ''){
    echo "<script>alert('请输入URL名称！');window.location.href='add.html'</script>";
}else{
    $servername = "localhost";
    $username = "root";
    $password = "cui,logic";
    $dbname = "urlusersdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_query($conn, "set names utf8");

    $sql = "SELECT username, urlname FROM urls WHERE username = '$usernm' AND urlname = '$urlName'";
    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);
    $sql2 = "SELECT username, urlstr FROM urls WHERE username = '$usernm' AND urlstr = '$url'";
    $result2 = $conn->query($sql2);
    $num2 = mysqli_num_rows($result2);
    if($num || $num2){
        echo "<script>alert('url已存在，添加失败！');window.location.href='add.html'</script>";
    }else{
        $sql = "INSERT INTO urls (username, urlstr, urlname)
        VALUES ('$usernm', '$url', '$urlName')";
        $sql2 = "INSERT INTO urllables (username, urlstr, urllable)
        VALUES ('$usernm', '$url', '$urlLable')";
        $sql3 = "INSERT INTO urlcomments (username, urlstr, urlcomment)
        VALUES ('$usernm', '$url', '$urlComment')";
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3)) {
            echo "<script>alert('添加成功！');window.location.href='index.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>