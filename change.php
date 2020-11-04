<?php
$case = $_POST["case"];
$url = $_POST["url"];
$urlInfo = $_POST["urlInfo"];

session_start();
$usernm = $_SESSION['user'];

if($url == ''){
    echo "<script>alert('请输入URL！');window.location.href='add.html'</script>";
}
if($urlInfo == ''){
    echo "<script>alert('请输入URL信息！');window.location.href='add.html'</script>";
}else{
    $servername = "localhost";
    $username = "root";
    $password = "cui,logic";
    $dbname = "urlusersdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_query($conn, "set names utf8");

    switch($case){
        case 0:
            $sql = "SELECT username, urlstr FROM urls WHERE username = '$usernm' AND urlstr = '$url'";
            $result = $conn->query($sql);
            $num = mysqli_num_rows($result);
            if($num){
                $sql = "INSERT INTO urllables (username, urlstr, urllable)
                VALUES ('$usernm', '$url', '$urlInfo')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('添加成功！');window.location.href='index.php'</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }else{
                echo "<script>alert('url不存在，添加失败！');window.location.href='change.html'</script>";
            }
            break;
        case 1:
            $sql = "SELECT username, urlstr FROM urls WHERE username = '$usernm' AND urlstr = '$url'";
            $result = $conn->query($sql);
            $num = mysqli_num_rows($result);
            if($num){
                $sql2 = "SELECT username, urllable FROM urllables WHERE username = '$usernm' AND urllable = '$urlInfo'";
                $result2 = $conn->query($sql2);
                $num2 = mysqli_num_rows($result2);
                if($num2){
                    if (mysqli_query($conn, $sql2)) {
                        mysqli_query($conn,"DELETE FROM urllables WHERE username = '$usernm' AND urlstr = '$url' AND urllable = '$urlInfo'");
                        echo "<script>alert('删除成功！');window.location.href='index.php'</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }else{
                    echo "<script>alert('url标签不存在，删除失败！');window.location.href='change.html'</script>";
                }
            }else{
                echo "<script>alert('url不存在，删除失败！');window.location.href='change.html'</script>";
            }
            break;
        case 2:
            $sql = "SELECT username, urlstr FROM urls WHERE username = '$usernm' AND urlstr = '$url'";
            $result = $conn->query($sql);
            $num = mysqli_num_rows($result);
            if($num){
                $sql = "INSERT INTO urlcomments (username, urlstr, urlcomment)
                VALUES ('$usernm', '$url', '$urlInfo')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('添加成功！');window.location.href='index.php'</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }else{
                echo "<script>alert('url不存在，添加失败！');window.location.href='change.html'</script>";
            }
            break;
        case 3:
            $sql = "SELECT username, urlstr FROM urls WHERE username = '$usernm' AND urlstr = '$url'";
            $result = $conn->query($sql);
            $num = mysqli_num_rows($result);
            if($num){
                $sql2 = "SELECT username, urlcomment FROM urlcomments WHERE username = '$usernm' AND urlcomment = '$urlInfo'";
                $result2 = $conn->query($sql2);
                $num2 = mysqli_num_rows($result2);
                if($num2){
                    if (mysqli_query($conn, $sql2)) {
                        mysqli_query($conn,"DELETE FROM urlcomments WHERE username = '$usernm' AND urlstr = '$url' AND urlcomment = '$urlInfo'");
                        echo "<script>alert('删除成功！');window.location.href='index.php'</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }else{
                    echo "<script>alert('url评论不存在，删除失败！');window.location.href='change.html'</script>";
                }
            }else{
                echo "<script>alert('url不存在，删除失败！');window.location.href='change.html'</script>";
            }
            break;
        case 4:
            $sql = "SELECT username, urlstr FROM urls WHERE username = '$usernm' AND urlstr = '$url'";
            $result = $conn->query($sql);
            $num = mysqli_num_rows($result);
            if($num){
                $sql = "UPDATE urls SET urlName = '$urlInfo' WHERE username = '$usernm' AND urlstr = '$url'";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('修改成功！');window.location.href='index.php'</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }else{
                echo "<script>alert('url不存在，修改失败！');window.location.href='change.html'</script>";
            }
            break;
    }
}
?>