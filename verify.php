<<<<<<< HEAD
<<<<<<< HEAD
<?php
    session_start();
    if (isset($_SESSION["id"])){
        header("location:index.php");
        die();
    }
?>
       
        <?php
            $login = $_POST['login'];
            $pwd = $_POST['pwd'];
            $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
            $sql="SELECT * FROM user where login='$login' and password=sha1('$pwd')";
            $result=$conn->query($sql);
            if($result->rowCount()==1){
                $data=$result->fetch(PDO::FETCH_ASSOC);
                $_SESSION['username']=$data["login"];
                $_SESSION['role']=$data["role"];
                $_SESSION['user_id']=$data["id"];
                $_SESSION['id']=session_id();
                header("Location:index.php");
                die();
            }else{
                $_SESSION['error']='error';
                header("Location:login.php");
                die();
            }
            $conn=null;
            ?>      

=======
=======
>>>>>>> parent of 95d5368 (work6 (php3))
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr> 
    <div style="text-align: center;">
        <?php
            $login=$_POST['login'];
            $pwd=$_POST['pwd'];
            if ($login=="admin" && $pwd=="ad1234"){
                echo "ยินดีต้อนรับคุณ ADMIN";
            }
            elseif ($login=="member" && $pwd=="mem1234"){
                echo "ยินดีต้อนรับคุณ MEMBER";
            }
            else{
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            }
            echo "<br><a href=index.php>กลับไปยังหน้าหลัก</a>";
        ?>
    </div> 
>>>>>>> parent of 95d5368 (work6 (php3))

