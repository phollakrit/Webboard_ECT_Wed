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

</body>
</html>