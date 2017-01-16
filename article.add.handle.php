<?php
$con = mysqli_connect('localhost','root','qwer7890!@#');

mysqli_query($con,"set names utf8");
mysqli_query($con,"set character_set_client=utf8");
mysqli_query($con,"set character_set_results=utf8");

    require_once('connect.php');
    //把传递过来的信息入库,在入库前对所有的信息进行校验
    if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
        echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>";
    }
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $dateline = date('Y-m-d H:i:s',time());
    $insertsql = "insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content','$dateline')";

    mysqli_select_db($con,'info');


if (mysqli_query($con,$insertsql))
{
    echo "提交成功";
    echo "<br>";
    date_default_timezone_set('Asia/Shanghai');
    echo date('Y-m-d H:i:s');
//    echo ($insertsql);
//    echo phpinfo();
}
