<?php
$urlDelete = $_POST["urlDelete"];

session_start();
$usernm = $_SESSION['user'];

if($urlDelete == ''){
    echo "<script>alert('请输入要删除的URL名称！');window.location.href='index.php'</script>";
}else{
    $servername = "localhost";
    $username = "root";
    $password = "cui,logic";
    $dbname = "urlusersdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_query($conn, "set names utf8");

    $sql = "SELECT * FROM urls WHERE username = '$usernm' AND urlname = '$urlDelete'";
    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if($num){
        $url = $row['urlstr'];
        if (mysqli_query($conn, $sql)) {
            mysqli_query($conn,"DELETE FROM urls WHERE username = '$usernm' AND urlname = '$urlDelete'");
            mysqli_query($conn,"DELETE FROM urllables WHERE username = '$usernm' AND urlstr = '$url'");
            mysqli_query($conn,"DELETE FROM urlcomments WHERE username = '$usernm' AND urlstr = '$url'");
            echo "<script>alert('删除成功！');window.location.href='index.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }else{
        echo "<script>alert('url不存在，删除失败！');window.location.href='index.php'</script>";
    }
}
?>